@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User create</h1>
          </div>
          <div class="col-sm-6">
            <a href="{{ route('hr.users.index') }}" class="btn btn-outline-primary btn-flat float-right">
              <i class="fa fa-bars"></i>
              List
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        @includeIf('flash::message')
        @includeIf('pages.user_management.users.form')
    </section>
</div>
@endsection