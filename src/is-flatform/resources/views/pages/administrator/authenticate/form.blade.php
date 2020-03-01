<div class="container">
  {!! Form::open(['class' => 'form-submit', 'role' => 'form', 'id' => 'user-form']) !!}
    <div class="form-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('name', 'Username') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('roles', 'Roles') }}
            {{ Form::select('roles', $roles, null, ['class' => 'select2', 'multiple' => 'multiple', 'data-placeholder' => 'Select...', 'style' => 'width: 100%;', 'name' => 'roles[]']) }}
          </div>
        </div>
        <div class="col-12  col-sm-6">
          <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
          </div>
        </div>
        <div class="col-12  col-sm-6">
          <div class="form-group">
            {{ Form::label('confirm_password', 'Confirm Password') }}
            {{ Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) }}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group clearfix">
          <div class="col-12 col-sm-6">
            <div class="icheck-primary d-inline">
              <input type="checkbox" checked id="status" name="status">
              <label for="status">
                Active
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container form-footer">
      <div class="row">
        <div class="col-12 text-center">
          <button class="btn btn-primary btn-flat">Save</button>
        </div>
      </div>
    </div>
  {!! Form::close() !!}
</div>
<div class="validate-group" style="display: none">
  <span class="name" data-name-required="@lang('user.name.required')"></span>
  <span class="password" data-password-required="@lang('user.password.required')"></span>
  <span class="confirm_password" data-confirm-password-required="@lang('user.confirm_password.required')"></span>
</div>
