<?php

namespace App\Http\Controllers\HR\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Repositories\UserRepository;
use App\Models\User;

class UsersController extends Controller
{
    // space that we can use the repository from
    protected $user;

    public function __construct(UserRepository $user)
    {
        // set the model
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->orderBy('id', 'desc')->paginate(config('app.paginate'));
        $roles = Role::pluck('name', 'id');
        return view('pages.administrator.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name');
        return view('pages.administrator.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('avatar')) {
                $data['avatar'] = $this->uploadImage($request->file('avatar'));
            }
            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);
            if ($user) {
                $user->assignRole($request->roles);
                flash('Create success!')->success();
                return redirect()->route('hr.users.index');
            }
            flash('An error occurred!')->error();
            return back();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            flash('An error occurred!')->error();
            return;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'id');
        return view('pages.administrator.users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name');
        return view('pages.administrator.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'name' => $request->name,
                'email' => $request->email,
                'birthday' => $request->birthday,
                'gender' => $request->gender,
                'status' => $request->status ? 1 : 0,
                'zip' => $request->zip,
                'phone' => $request->phone,
                'address' => $request->address,
            ];
            if ($request->hasFile('avatar')) {
                $data['avatar'] = $this->uploadImage($request->file('avatar'), $user->avatar);
            }
            if ($request->password !== null) {
                $data['password'] = bcrypt($request->password);
            }
            $user->update($data);
            if ($user) {
                $user->syncRoles($request->roles);
                flash('Update success!')->success();
                return redirect()->route('hr.users.index');
            }
            flash('An error occurred!')->error();
            return back();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            flash('An error occurred!')->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
