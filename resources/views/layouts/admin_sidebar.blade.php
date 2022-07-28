
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{route('home1')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{asset('admin-assets/img/icons/brands/logo.png')}}" class="img-fluid" alt="logo">
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{ route('admin.dashboard') }}" class="menu-link {{ request()->is('admin/home') || request()->is('admin/dashboard/*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') || request()->is('admin/permissions') || request()->is('admin/permissions/*') || request()->is('admin/users') || request()->is('admin/users/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Layouts">User Management</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.roles.index') }}" class="menu-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                    <div data-i18n="Without menu">Role</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.permissions.index') }}" class="menu-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                    <div data-i18n="Without navbar">Permission</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.users.index') }}" class="menu-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                    <div data-i18n="Without navbar">User</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item {{ request()->is('admin/clinics') || request()->is('admin/clinics/*') || request()->is('admin/clinics/create') || request()->is('admin/clinics/create/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Layouts">Clinic</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('admin.clinics.index')}}" class="menu-link {{ request()->is('admin/clinics') || request()->is('admin/clinics/*') ? 'active' : '' }}">
                    <div data-i18n="Without menu">All Clinic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('admin.clinics.create')}}" class="menu-link {{ request()->is('admin/clinics/create') || request()->is('admin/clinics/create/*') ? 'active' : '' }}">
                    <div data-i18n="Without navbar">Add Clinic</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item {{ request()->is('admin/doctors') || request()->is('admin/doctors/*') || request()->is('admin/doctors/create') || request()->is('admin/doctors/create/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-detail "></i>
                <div data-i18n="Account Settings">Doctors</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.doctors.index') }}" class="menu-link {{ request()->is('admin/doctors') || request()->is('admin/doctors/*') ? 'active' : '' }}">
                    <div data-i18n="Account">All Doctors</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.doctors.create') }}" class="menu-link {{ request()->is('admin/doctors/create') || request()->is('admin/doctors/create/*') ? 'active' : '' }}">
                    <div data-i18n="Notifications">Add Doctors</div>
                  </a>
                </li>
              </ul>
            </li>

              <li class="menu-item {{ request()->is('admin/appointments') || request()->is('admin/appointments/*') || request()->is('admin/appointments/create') || request()->is('admin/appointments/create/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="Account Settings">Appointments</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.appointments.index') }}" class="menu-link {{ request()->is('admin/appointments') || request()->is('admin/appointments/*') ? 'active' : '' }}">
                    <div data-i18n="Account">All Appointments</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.appointments.create') }}" class="menu-link {{ request()->is('admin/appointments/create') || request()->is('admin/appointments/create/*') ? 'active' : '' }}">
                    <div data-i18n="Notifications">Create Appointments</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item {{ request()->is('admin/services') || request()->is('admin/services/*') || request()->is('admin/services/create') || request()->is('admin/services/create/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Layouts">Services</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.services.index') }}" class="menu-link {{ request()->is('admin/services') || request()->is('admin/services/*') ? 'active' : '' }}">
                    <div data-i18n="Without menu">All Services</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.services.create') }}" class="menu-link {{ request()->is('admin/services/create') || request()->is('admin/services/create/*') ? 'active' : '' }}">
                    <div data-i18n="Without navbar">Add Services</div>
                  </a>
                </li>
              </ul>
            </li>

              <li class="menu-item {{ request()->is('admin/clients') || request()->is('admin/clients/*') || request()->is('admin/clients/create') || request()->is('admin/clients/create/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-plus"></i>
                <div data-i18n="Account Settings">Clients</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.clients.index') }}" class="menu-link {{ request()->is('admin/clients') || request()->is('admin/clients/*') ? 'active' : '' }}">
                    <div data-i18n="Account">All Clients</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.clients.create') }}" class="menu-link {{ request()->is('admin/clients/create') || request()->is('admin/clients/create/*') ? 'active' : '' }}">
                    <div data-i18n="Notifications">Add Clients</div>
                  </a>
                </li>
              </ul>
            </li>
           

             <li class="menu-item {{ request()->is('admin/products') || request()->is('admin/products/*') || request()->is('admin/products/create') || request()->is('admin/products/create/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="Account Settings">Products</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.products.index') }}" class="menu-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                    <div data-i18n="Account">All Products</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.products.create') }}" class="menu-link {{ request()->is('admin/products/create') || request()->is('admin/products/create/*') ? 'active' : '' }}">
                    <div data-i18n="Notifications">Add Products</div>
                  </a>
                </li>
              </ul>
            </li>

             <li class="menu-item {{ request()->is('admin/teams') || request()->is('admin/teams/*') || request()->is('admin/teams/create') || request()->is('admin/teams/create/*') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Account Settings">Our Team</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.teams.index') }}" class="menu-link {{ request()->is('admin/teams') || request()->is('admin/teams/*') ? 'active' : '' }}">
                    <div data-i18n="Account">All Team</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.teams.create') }}" class="menu-link {{ request()->is('admin/teams/create') || request()->is('admin/teams/create/*') ? 'active' : '' }}">
                    <div data-i18n="Notifications">Add Team</div>
                  </a>
                </li>
              </ul>
            </li>
         
          </ul>
        </aside>