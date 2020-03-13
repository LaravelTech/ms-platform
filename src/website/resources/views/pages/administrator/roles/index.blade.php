@extends('layouts.app')
@section('title') roles @endsection

@section('content')
@includeIf('notification')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Roles</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('hr.roles.create') }}" class="btn btn-outline-primary btn-flat float-right" data-toggle="modal" data-target="#addRole">
            <i class="fa fa-plus"></i>
            Create
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-striped table-search">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($roles as $role)
                  <tr>
                  <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                      {{ $role->created_at }}
                    </td>
                    <td>
                      <a class="btn btn-info btn-sm btn-flat edit-modal" data-name="{{ $role->name }}" data-id="{{ $role->id }}" href="{{ route('hr.roles.edit', $role->id) }}" data-toggle="modal">
                          <i class="fas fa-pencil-alt"></i>
                          Edit
                      </a>
                      {!! Form::open(['url' => route('hr.roles.destroy', $role->id),'method' => 'DELETE', 'class' => 'inline-block form-delete']) !!}
                        <button type="button" class="btn btn-danger btn-sm btn-flat btn-delete" data-id="{{ $role->id }}">
                          <i class="fas fa-trash"></i>
                          Delete
                        </button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer clearfix">
              {!! $roles->appends(request()->query())->links() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Modal Add New -->
<div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="addRoleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    {!! Form::open(['url' => '', 'method' => 'post', 'class' => 'form-submit', 'role' => 'form', 'id' => 'add-form']) !!}
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addRoleLabel">Add Role</h5>
        <button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="form-group">
              {{ Form::label('name', 'Name') }}
              {{ Form::text('name', null, ['class' => 'form-control name', 'placeholder' => 'Name']) }}
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-close">Close</button>
        <button type="submit" class="btn btn-primary btn-add">
          Save
        </button>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="editRole" tabindex="-1" role="dialog" aria-labelledby="editRoleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    {!! Form::open(['url' => '', 'method' => 'post', 'class' => 'form-submit', 'role' => 'form', 'id' => 'edit-form']) !!}
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editRoleLabel">Edit Role</h5>
        <button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ Form::hidden('id', null, ['class' => 'form-control role_id']) }}
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="form-group">
              {{ Form::label('name', 'Name') }}
              {{ Form::text('name', null, ['class' => 'form-control name', 'placeholder' => 'Name']) }}
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-close">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
<div class="validate-group" style="display: none">
  <span class="name-add" data-name-required="@lang('role.name.required')"></span>
  <span class="name-edit" data-name-required="@lang('role.name.required')"></span>
</div>
@endsection

@push('scripts')
  <script>
    $(document).ready(function () {
      add_valiate();
      edit_valiate();

      $('.edit-modal').on('click',function (e) {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var route = "{{ route('hr.roles.index') }}/"+id;
        $("#editRole").find('.name').val(name);
        $("#editRole").find('.role_id').val(id);
        $("#editRole").find('.form-submit').attr('action', route);
        $('#editRole').modal();
      });

      $('.btn-close').click(function() {
        $(":input").val(null);
        $('#addRole').modal('hide');
        $('#editRole').modal('hide');
      });

    });

    function add_role(form) {
      $.ajax({
        type: "POST",
        url: "{{ route('hr.roles.store') }}",
        data: $(form).serialize(),
        success: function(res) {
          if (res.status) {
            toastr.success("Role created successfully!", { timeOut: 900 });
            setTimeout("location.reload(true);",800);
          } else {
            toastr.error("An error occurred!", { timeOut: 900 });
          }          
        }
      });
    }

    function edit_role(form) {
      var url = $(form).attr('action');
      $.ajax({
        type: "PUT",
        url: url,
        data: $(form).serialize(),
        success: function(res) {
          if (res.status) {
            toastr.success("Role created successfully!", { timeOut: 900 });
            setTimeout("location.reload(true);",800);
          } else {
            toastr.error("An error occurred!", { timeOut: 900 });
          }          
        }
      });
    }

    function add_valiate() {
      $('#add-form').validate({
        rules: {
          name: {
            required: true,
          }
        },
        messages: {
          name: {
            required: $('.name-add').data('name-required'),
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
        },
        submitHandler: function(form) {
          add_role(form)
        }
      });
    }

    function edit_valiate() {
      var name = $('#addRole').find('.name').val();
      $('#edit-form').validate({
        rules: {
          name: {
            required: true,
          }
        },
        messages: {
          name: {
            required: $('.name-edit').data('name-required'),
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
        },
        submitHandler: function(form) {
          edit_role(form)
        }
      });
    }
  </script>
@endpush
