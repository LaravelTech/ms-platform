@extends('layouts.app')
@section('title') Users @endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('hr.users.create') }}" class="btn btn-outline-primary btn-flat float-right">
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
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="full_name">Full name</label>
                    <input type="text" class="form-control" placeholder="Enter Full name" name="full_name">
                  </div>
                  <!-- /.form-group -->
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
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap table-striped table-search">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Full name</th>
                    <th>Avatar</th>
                    <th>Gender</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                  <td>{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{!! optional($user)->full_name !!}</td>
                    <td>{!! optional($user)->avatar !!}</td>
                    <td>{!! optional($user)->gender !!}</td>
                    <td>
                      {{ $user->created_at }}
                    </td>
                    <td>
                      <a class="btn btn-primary btn-sm btn-flat" href="{{ route('hr.users.show', $user->id) }}">
                        <i class="fas fa-eye"></i>
                        View
                      </a>
                      <a class="btn btn-info btn-sm btn-flat" href="{{ route('hr.users.edit', $user->id) }}">
                          <i class="fas fa-pencil-alt"></i>
                          Edit
                      </a>
                      {!! Form::open(['url' => route('hr.users.destroy', $user->id),'method' => 'DELETE', 'class' => 'inline-block form-delete']) !!}
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
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {!! $users->appends(request()->query())->links() !!}
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection