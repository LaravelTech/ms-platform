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
          <label for="exampleInputEmail1">Gender</label>
          <div class="form-group clearfix">
            <div class="icheck-primary d-inline">
              {{ Form::radio('gender', 1, null, ['id' => 'gender1']) }}
              {{ Form::label('gender1', 'Male') }}
            </div>
            <div class="icheck-primary d-inline">
              {{ Form::radio('gender', 0, null, ['id' => 'gender2']) }}
              {{ Form::label('gender2', 'Female') }}
            </div>
            <div class="icheck-primary d-inline">
              {{ Form::radio('gender', 2, 'checked', ['id' => 'gender3']) }}
              {{ Form::label('gender3', 'Orther') }}
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
          </div>
        </div>
        <div class="col-12  col-sm-6">
          <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('avatar', 'Avatar') }}
            <div class="custom-file">
              {{ Form::file('avatar', ['class' => 'custom-file-input', 'id' => 'customFile']) }}
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('birthday', 'Birthday') }}
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="far fa-calendar-alt"></i>
                </span>
              </div>
              {{ Form::text('birthday', \Carbon\Carbon::now(), ['class' => 'form-control float-right datepicker']) }}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('roles', 'Roles') }}
            {{ Form::select('roles', $roles, null, ['class' => 'select2', 'multiple' => 'multiple', 'data-placeholder' => 'Select...', 'style' => 'width: 100%;', 'name' => 'roles[]']) }}
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
  <span class="email" data-email-required="@lang('user.email.required')"></span>
  <span class="email" data-email-vaild="@lang('user.email.email')"></span>
  <span class="password" data-password-required="@lang('user.password.required')"></span>
</div>
