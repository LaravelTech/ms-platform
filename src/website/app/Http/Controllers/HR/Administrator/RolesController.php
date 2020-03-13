<?php

namespace App\Http\Controllers\HR\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RoleAddRequest;
use App\Http\Requests\RoleEditRequest;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(config('app.paginate'));
        return view('pages.administrator.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.administrator.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleAddRequest $request)
    {
        try {
            if (Role::create($request->all())) {
                return $this->apiResponse();
            }
            return $this->apiResponse();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return $this->apiResponse(false);
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
        $roles = Role::pluck('name', 'id');
        return view('pages.administrator.roles.show', compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('pages.administrator.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleEditRequest $request, Role $role)
    {
        try {
            $role->update($request->all());
            return $this->apiResponse();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return $this->apiResponse(false);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        try {
            $role->delete();
            return redirect()->route('hr.roles.index')->with('success','Role deleted successfully');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return back()->with('error','An error occurred!');
        }
    }
}
