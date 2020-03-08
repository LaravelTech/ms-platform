<div class="container">
  {!! Form::open(['class' => 'form-submit', 'role' => 'form', 'id' => 'user-form']) !!}
    <div class="form-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
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
</div>
