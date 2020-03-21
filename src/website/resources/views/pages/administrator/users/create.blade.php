@extends('layouts.app')
@section('title', 'User Create')

@section('function')
@parent
<li class="nav-item d-none d-sm-inline-block">
  <a href="{{ route('hr.users.index') }}" class="nav-link btn btn-block btn-outline-secondary btn-sm">
    <i class="fa fa-bars"></i>
    @lang('user.list')
  </a>
</li>
@endsection

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Administrator</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('hr.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">User create</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    @includeIf('pages.administrator.users.form')
    @includeIf('validations.user_create')
  </section>
</div>
@endsection
@push('scripts')
  <script>
    $(document).ready(function () {
      form_valiate();
    });
  </script>
@endpush
