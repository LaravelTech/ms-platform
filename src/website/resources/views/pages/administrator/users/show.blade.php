@extends('layouts.app')
@section('title', 'Detail user')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>@lang('user.detail_user')</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('hr.users.index') }}" class="btn btn-outline-primary btn-flat float-right ml-1">
            <i class="fa fa-bars"></i>
            @lang('user.list')
          </a>
          <a href="{{ route('hr.users.edit', $user->id) }}" class="btn btn-outline-primary btn-flat float-right">
            <i class="fa fa-pencil-alt"></i>
            @lang('common.edit')
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>Id</th>
                <td>{{ $user->id }}</td>
              </tr>
              <tr>
                <th>Username</th>
                <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <th>Full name</th>
                <td>{{ optional($user)->first_name . ' ' . optional($user)->last_name }}</td>
              </tr>
              <tr>
                <th>Roles</th>
                <td>
                  @foreach ($user->roles as $role)
                    <span class="badge bg-success">{{ $role->name }}</span>
                  @endforeach
                </td>
              </tr>
              <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
              </tr>
              <tr>
                <th>Created at</th>
                <td>{{ $user->created_at }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
