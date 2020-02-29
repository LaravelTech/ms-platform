<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="/" class="brand-link">
    <img src="{{ asset('assets/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/dist/img/user2-160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('hr.dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-cube"></i>
            <p>@lang('sidebar.dashboard')</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              @lang('sidebar.administrator')
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('hr.authenticate.index') }}" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.authenticate')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('hr.users.index') }}" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.users')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('hr.roles.index') }}" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.roles')</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              @lang('sidebar.employees')
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.all_employees')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.holidays')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.attendance')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.departments')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.designations')</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              @lang('sidebar.payroll')
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.employee_salary')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.payslip')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-angle-double-right"></i>
                <p>@lang('sidebar.payroll_items')</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- @includeIf('layouts.partials.sidebar.main')
        @includeIf('layouts.partials.sidebar.employees')
        @includeIf('layouts.partials.sidebar.hr')
        @includeIf('layouts.partials.sidebar.administration') --}}
        @includeIf('layouts.partials.sidebar.examples')
      </ul>
    </nav>
  </div>
</aside>