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
          <a href="{{ route('hr.employees.index') }}" class="btn btn-outline-primary btn-flat float-right ml-1">
            <i class="fa fa-bars"></i>
            @lang('user.list')
          </a>
          <a href="{{ route('hr.employees.edit', 1) }}" class="btn btn-outline-primary btn-flat float-right">
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
                <td></td>
              </tr>
              <tr>
                <th>Username</th>
                <td></td>
              </tr>
              <tr>
                <th>Full name</th>
                <td></td>
              </tr>
              <tr>
                <th>Roles</th>
                <td>
                </td>
              </tr>
              <tr>
                <th>Email</th>
                <td></td>
              </tr>
              <tr>
                <th>Created at</th>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
