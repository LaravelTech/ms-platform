@extends('layouts.app')
@section('title') Users @endsection
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Authenticate</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('hr.authenticate.create') }}" class="btn btn-outline-primary btn-flat float-right">
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
      <!-- /.Form Search -->
      <div class="card card-default">
        <div class="card-header cart-boder">
          <h3 class="card-title">Search</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form role="form" class="form-search">
            @csrf
            <div class="form-body">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    {{ Form::label('roles', 'Roles') }}
                    {{ Form::select('roles', $roles, null, ['class' => 'select2', 'multiple' => 'multiple', 'data-placeholder' => 'Select...', 'style' => 'width: 100%;', 'name' => 'roles[]']) }}
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary btn-flat">Search</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-striped table-search">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                  <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @foreach ($user->roles as $role)
                      <span class="badge bg-success">{{ $role->name }}</span>
                      @endforeach
                    </td>
                    <td>
                      {{ $user->created_at }}
                    </td>
                    <td>
                      <a class="btn btn-primary btn-sm btn-flat" href="{{ route('hr.authenticate.show', $user->id) }}">
                        <i class="fas fa-eye"></i>
                        View
                      </a>
                      <a class="btn btn-info btn-sm btn-flat" href="{{ route('hr.authenticate.edit', $user->id) }}">
                          <i class="fas fa-pencil-alt"></i>
                          Edit
                      </a>
                      {!! Form::open(['url' => route('hr.authenticate.destroy', $user->id),'method' => 'DELETE', 'class' => 'inline-block form-delete']) !!}
                        <button type="button" class="btn btn-danger btn-sm btn-flat" data-id="{{ $user->id }}">
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
              {!! $users->appends(request()->query())->links() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection