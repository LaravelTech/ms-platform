<div class="validate-group" style="display: none">
  <span class="name" data-name-required="@lang('user.name.required')"></span>
  <span class="email" data-email-required="@lang('user.email.required')"></span>
  <span class="email" data-email="@lang('user.email.email')"></span>
  <span class="password" data-password-required="@lang('user.password.required')"></span>
  <span class="confirm_password" data-confirm-password-required="@lang('user.confirm_password.required')"></span>
</div>
@push('scripts')
  <script>
    function form_valiate() {
      $('#user-form').validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          }
        },
        messages: {
          name: {
            required: $('.name').data('name-required'),
          },
          email: {
            required: $('.email').data('email-required'),
            email: $('.email').data('email'),
          }
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
    }
  </script>
@endpush
