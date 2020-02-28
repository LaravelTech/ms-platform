@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>@lang('user.add_user')</h1>
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
      @includeIf('pages.user_management.users.form')
  </section>
</div>
@endsection
@push('scripts')
  <script>
    $(document).ready(function () {
      $('#user-form').validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
          }
        },
        messages: {
          name: {
            required: $('.name').data('name-required'),
          },
          email: {
            required: $('.email').data('email-required'),
            email: $('.email').data('email-vaild'),
          },
          password: {
            required: $('.password').data('password-required')
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
@endpush