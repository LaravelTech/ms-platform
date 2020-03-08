<?php

namespace App\Http\Controllers\HR\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UsersController extends Controller
{
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
    public function store(UserCreateRequest $request)
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
                return redirect()->route('hr.users.index')->with('success', 'User created successfully!');
            }
            return back()->with('error', 'An error occurred!');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return back()->with('error', 'An error occurred!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::pluck('name', 'id');
        return view('pages.administrator.users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
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
    public function update(UserEditRequest $request, User $user)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('avatar')) {
                $data['avatar'] = $this->uploadImage($request->file('avatar'), $user->avatar);
            }
            if ($request->password !== null) {
                $data['password'] = bcrypt($request->password);
            } else {
                $data = \Arr::except($data, ['password']);
            }
            $user->update($data);
            if ($user) {
                $user->syncRoles($request->roles);
                return redirect()->route('hr.users.index')->with('success','User updated successfully');
            }
            flash('An error occurred!')->error();
            return back();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return back()->with('error','An error occurred!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->route('hr.users.index')->with('success','User deleted successfully');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return back()->with('error','An error occurred!');
        }
    }
}
