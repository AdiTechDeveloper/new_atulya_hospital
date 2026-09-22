<aside class="sidebar-wrapper">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="{{ asset('/assets/img/logo/atulyalogo.png') }}" class="logo-img" alt="Logo">
        </div>

        {{-- <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Atulya Hospital</h5>

        </div> --}}

        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>

    <div class="sidebar-nav" data-simplebar="true">
        <!-- Navigation -->
        <ul class="metismenu" id="sidenav">

            <!-- Dashboard -->
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">dashboard</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <!-- Videos -->
            <li>
                <a href="{{ url('/admin/videos') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">videocam</i>
                    </div>
                    <div class="menu-title">Videos</div>
                </a>
            </li>

            <!-- Gallery -->
            <li>
                <a href="{{ route('admin.gallery.index') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">photo</i>
                    </div>
                    <div class="menu-title">Gallery</div>
                </a>
            </li>

            <!-- Doctors -->
            <li>
                <a href="{{ route('admin.doctors.index') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">people</i>
                    </div>
                    <div class="menu-title">Doctors</div>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/facilities/') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">workspace_premium</i>
                    </div>
                    <div class="menu-title">Facilities</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/blogs/') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">article</i>
                    </div>
                    <div class="menu-title">Blogs</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/departments/') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">account_balance</i>
                    </div>
                    <div class="menu-title">Departments</div>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/admin/appointments/') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">calendar_month</i>
                    </div>
                    <div class="menu-title">Appointments</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/jobs') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">add_business</i>
                    </div>
                    <div class="menu-title">Jobs</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/job-applications') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">attach_email</i>
                    </div>
                    <div class="menu-title">Jobs Applications</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/settings/') }}">
                    <div class="parent-icon">
                        <i class="material-icons-outlined">brightness_5</i>
                    </div>
                    <div class="menu-title">Setting</div>
                </a>
            </li>




        </ul>
        <!-- End navigation -->
    </div>

    {{-- <div class="sidebar-bottom gap-4">
        <div class="dark-mode">
            <a href="javascript:;" class="footer-icon dark-mode-icon">
                <i class="material-icons-outlined">dark_mode</i>
            </a>
        </div>

        <div class="dropdown dropup-center dropup dropdown-laungauge">
            <a class="dropdown-toggle dropdown-toggle-nocaret footer-icon"
               href="javascript:;"
               data-bs-toggle="dropdown">
                <img src="{{ asset('admin/assets/images/county/02.png') }}"
    width="22"
    alt="">
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/01.png') }}" width="20" alt="">
                <span class="ms-2">English</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/02.png') }}" width="20" alt="">
                <span class="ms-2">Catalan</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/03.png') }}" width="20" alt="">
                <span class="ms-2">French</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/04.png') }}" width="20" alt="">
                <span class="ms-2">Belize</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/05.png') }}" width="20" alt="">
                <span class="ms-2">Colombia</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/06.png') }}" width="20" alt="">
                <span class="ms-2">Spanish</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/07.png') }}" width="20" alt="">
                <span class="ms-2">Georgian</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center py-2" href="javascript:;">
                <img src="{{ asset('admin/assets/images/county/08.png') }}" width="20" alt="">
                <span class="ms-2">Hindi</span>
            </a>
        </li>
    </ul>
    </div>

    <div class="dropdown dropup-center dropup dropdown-help">
        <a class="footer-icon dropdown-toggle dropdown-toggle-nocaret option" href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons-outlined">info</span>
        </a>

        <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
            <div>
                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;">
                    <i class="material-icons-outlined fs-6">inventory_2</i>
                    Archive All
                </a>
            </div>

            <div>
                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;">
                    <i class="material-icons-outlined fs-6">done_all</i>
                    Mark all as read
                </a>
            </div>

            <div>
                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;">
                    <i class="material-icons-outlined fs-6">mic_off</i>
                    Disable Notifications
                </a>
            </div>

            <div>
                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;">
                    <i class="material-icons-outlined fs-6">grade</i>
                    What's new?
                </a>
            </div>

            <div>
                <hr class="dropdown-divider">
            </div>

            <div>
                <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;">
                    <i class="material-icons-outlined fs-6">leaderboard</i>
                    Reports
                </a>
            </div>
        </div>
    </div>
    </div> --}}
</aside>