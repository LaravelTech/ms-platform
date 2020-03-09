@extends('layouts.app')
@section('title') roles @endsection
@section('content')
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
                      <a class="btn btn-info btn-sm btn-flat" href="{{ route('hr.roles.edit', $role->id) }}" data-toggle="modal" data-target="#editRole">
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addRoleLabel">Add Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="form-group">
              {{ Form::label('name', 'Name') }}
              {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="editRole" tabindex="-1" role="dialog" aria-labelledby="editRoleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editRoleLabel">Edit Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="form-group">
              {{ Form::label('name', 'Name') }}
              {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
@endsection