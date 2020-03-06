<?php

namespace App\Http\Controllers\HR\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Repositories\UserRepository;

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
        $users = $this->user->with('roles')->paginate(config('app.paginate'));
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
            $user = $this->user->create($data);
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
        $user = $this->user->find($id);
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
        $user = $this->user->find($id);
        $roles = Role::pluck('name', 'id');
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
            $user = $this->user->find($id);
            $data = $request->all();
            if ($request->hasFile('avatar')) {
                $data['avatar'] = $this->uploadImage($request->file('avatar'), $user->avatar);
            }
            if ($request->password !== null) {
                $data['password'] = bcrypt($data['password']);
            }
            dd($data);
            $user->update($data, $id);
            if ($user) {
                $user->assignRole($request->roles);
                flash('Update success!')->success();
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
