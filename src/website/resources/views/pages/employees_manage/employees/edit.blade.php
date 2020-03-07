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
          <a href="{{ route('hr.employees.index') }}" class="btn btn-outline-primary btn-flat float-right">
            <i class="fa fa-bars"></i>
            @lang('user.list')
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
      @includeIf('flash::message')
      @includeIf('pages.employees_manage.employees.form')
  </section>
</div>
@endsection
@push('scripts')
  <script>
    $(document).ready(function () {
      // Validate
  </script>
@endpush