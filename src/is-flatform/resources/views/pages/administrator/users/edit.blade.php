@extends('layouts.app')
@section('title', 'User Edit')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>@lang('user.edit_user')</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('hr.users.index') }}" class="btn btn-outline-primary btn-flat float-right">
            <i class="fa fa-bars"></i>
            @lang('user.list')
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
      @includeIf('flash::message')
      @includeIf('pages.administrator.users.form')
      @includeIf('validations.form_users')
  </section>
</div>
@endsection
