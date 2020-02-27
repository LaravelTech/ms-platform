<div class="container">
  <form role="form" class="form-submit">
    <div class="form-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label for="">First name</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
        </div>
        <div class="col-12  col-sm-6">
          <div class="form-group">
            <label for="">Last name</label>
            <input type="text" class="form-control" placeholder="Last name">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label for="">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>
        </div>
        <div class="col-12  col-sm-6">
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" placeholder="Password">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label for="customFile">Avater</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Birthday:</label>
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
      <div class="row">
        <div class="col-12 col-sm-6">
          <!-- radio -->
          <label for="exampleInputEmail1">Gender</label>
          <div class="form-group clearfix">
            <div class="icheck-primary d-inline">
              <input type="radio" id="radioPrimary1" name="r1" checked>
              <label for="radioPrimary1">
                Female
              </label>
            </div>
            <div class="icheck-primary d-inline">
              <input type="radio" id="radioPrimary2" name="r1">
              <label for="radioPrimary2">
                Male
              </label>
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