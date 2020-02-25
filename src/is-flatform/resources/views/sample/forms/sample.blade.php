@extends('layouts.app')
@section('title') Form sample @endsection
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form sample</h1>
        </div>
        <div class="col-sm-6">
          <a href="/sample/table-sample" class="btn btn-outline-primary btn-flat float-right">
            <i class="fa fa-bars"></i>
            List
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <form role="form" class="form-submit">
        <div class="form-body">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2" style="width: 100%;">
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
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Minimal (.select2-danger)</label>
                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
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
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Multiple (.select2-purple)</label>
                <div class="select2-purple">
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
            </div>
            <div class="col-12  col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Text</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Text Disabled</label>
                <input type="text" class="form-control" placeholder="Enter ..." disabled>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Date range:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right" id="reservation">
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Date and time range:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                  </div>
                  <input type="text" class="form-control float-right" id="reservationtime">
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Textarea</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Textarea Disabled</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="customFile">Custom File</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <!-- checkbox -->
              <div class="form-group clearfix">
                <div class="icheck-primary d-inline">
                  <input type="checkbox" id="checkboxPrimary1" checked>
                  <label for="checkboxPrimary1">
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" id="checkboxPrimary2">
                  <label for="checkboxPrimary2">
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="checkbox" id="checkboxPrimary3" disabled>
                  <label for="checkboxPrimary3">
                    Primary checkbox
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <!-- radio -->
              <div class="form-group clearfix">
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary1" name="r1" checked>
                  <label for="radioPrimary1">
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary2" name="r1">
                  <label for="radioPrimary2">
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary3" name="r1" disabled>
                  <label for="radioPrimary3">
                    Primary radio
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <!-- checkbox -->
              <div class="form-group clearfix">
                <div class="icheck-danger d-inline">
                  <input type="checkbox" checked id="checkboxDanger1">
                  <label for="checkboxDanger1">
                  </label>
                </div>
                <div class="icheck-danger d-inline">
                  <input type="checkbox" id="checkboxDanger2">
                  <label for="checkboxDanger2">
                  </label>
                </div>
                <div class="icheck-danger d-inline">
                  <input type="checkbox" disabled id="checkboxDanger3">
                  <label for="checkboxDanger3">
                    Danger checkbox
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <!-- radio -->
              <div class="form-group clearfix">
                <div class="icheck-danger d-inline">
                  <input type="radio" name="r2" checked id="radioDanger1">
                  <label for="radioDanger1">
                  </label>
                </div>
                <div class="icheck-danger d-inline">
                  <input type="radio" name="r2" id="radioDanger2">
                  <label for="radioDanger2">
                  </label>
                </div>
                <div class="icheck-danger d-inline">
                  <input type="radio" name="r2" disabled id="radioDanger3">
                  <label for="radioDanger3">
                    Danger radio
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <!-- checkbox -->
              <div class="form-group clearfix">
                <div class="icheck-success d-inline">
                  <input type="checkbox" checked id="checkboxSuccess1">
                  <label for="checkboxSuccess1">
                  </label>
                </div>
                <div class="icheck-success d-inline">
                  <input type="checkbox" id="checkboxSuccess2">
                  <label for="checkboxSuccess2">
                  </label>
                </div>
                <div class="icheck-success d-inline">
                  <input type="checkbox" disabled id="checkboxSuccess3">
                  <label for="checkboxSuccess3">
                    Success checkbox
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <!-- radio -->
              <div class="form-group clearfix">
                <div class="icheck-success d-inline">
                  <input type="radio" name="r3" checked id="radioSuccess1">
                  <label for="radioSuccess1">
                  </label>
                </div>
                <div class="icheck-success d-inline">
                  <input type="radio" name="r3" id="radioSuccess2">
                  <label for="radioSuccess2">
                  </label>
                </div>
                <div class="icheck-success d-inline">
                  <input type="radio" name="r3" disabled id="radioSuccess3">
                  <label for="radioSuccess3">
                    Success radio
                  </label>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Date:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right datepicker">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container form-footer">
          <div class="row">
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary btn-flat">Save</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection