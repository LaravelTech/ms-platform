@extends('layouts.admin')
@section('title') Table Simple @endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sample Tables</h1>
        </div>
        <div class="col-sm-6">
          <a href="/sample/form-sample" class="btn btn-outline-primary btn-flat float-right">
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
          <h3 class="card-title">Search form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form role="form" class="form-search">
            <div class="form-body">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label>Minimal</label>
                    <select class="form-control select2" style="width: 100%;" name="keyword">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Disabled</label>
                    <select class="form-control select2" disabled="disabled" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label>Multiple</label>
                    <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Disabled Result</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option disabled="disabled">California (disabled)</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
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
                    <th>User</th>
                    <th>Date</th>
                    <th>Progress</th>
                    <th>Status</th>
                    <th>Reason</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @for ($i = 0; $i < 20; $i++)
                  <tr>
                  <td>17{{ $i }}</td>
                    <td>Mike Doe</td>
                    <td>11-7-2014</td>
                    <td>
                      <div class="progress progress-sm">
                          <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                          </div>
                      </div>
                      <small>
                          57% Complete
                      </small>
                    </td>
                    <td><span class="badge bg-success">Complete</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    <td>
                      <a class="btn btn-primary btn-sm btn-flat" href="#">
                        <i class="fas fa-eye"></i>
                        View
                      </a>
                      <a class="btn btn-info btn-sm btn-flat" href="#">
                          <i class="fas fa-pencil-alt"></i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm btn-flat" href="#">
                          <i class="fas fa-trash"></i>
                          Delete
                      </a>
                    </td>
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection