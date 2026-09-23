<aside class="sidebar-wrapper" id="adminSidebar">

    {{-- =====================================================
         SIDEBAR HEADER
    ====================================================== --}}
    <div class="sidebar-header">

        <div class="logo-icon">

            <a href="{{ route('admin.dashboard') }}">

                <img
                    src="{{ asset('assets/img/logo/atulyalogo.png') }}"
                    class="logo-img"
                    alt="Atulya Hospital">

            </a>

        </div>


        {{-- MOBILE / SIDEBAR CLOSE --}}
        <div class="sidebar-close">

            <span class="material-icons-outlined">
                close
            </span>

        </div>

    </div>


    {{-- =====================================================
         SIDEBAR NAVIGATION
    ====================================================== --}}
    <div
        class="sidebar-nav"
        data-simplebar="true">

        <ul
            class="metismenu"
            id="sidenav">


            {{-- =================================================
                 DASHBOARD
            ================================================== --}}
            <li
                class="{{ request()->is('admin/dashboard') ? 'mm-active' : '' }}">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            dashboard
                        </i>
                    </div>

                    <div class="menu-title">
                        Dashboard
                    </div>

                </a>

            </li>


            {{-- =================================================
                 VIDEOS
            ================================================== --}}
            <li
                class="{{ request()->is('admin/videos*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/videos') }}"
                    class="{{ request()->is('admin/videos*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            video_library
                        </i>
                    </div>

                    <div class="menu-title">
                        Videos
                    </div>

                </a>

            </li>


            {{-- =================================================
                 GALLERY
            ================================================== --}}
            <li
                class="{{ request()->is('admin/gallery*') ? 'mm-active' : '' }}">

                <a
                    href="{{ route('admin.gallery.index') }}"
                    class="{{ request()->is('admin/gallery*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            photo_library
                        </i>
                    </div>

                    <div class="menu-title">
                        Gallery
                    </div>

                </a>

            </li>


            {{-- =================================================
                 DOCTORS
            ================================================== --}}
            <li
                class="{{ request()->is('admin/doctors*') ? 'mm-active' : '' }}">

                <a
                    href="{{ route('admin.doctors.index') }}"
                    class="{{ request()->is('admin/doctors*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            medical_services
                        </i>
                    </div>

                    <div class="menu-title">
                        Doctors
                    </div>

                </a>

            </li>


            {{-- =================================================
                 FACILITIES
            ================================================== --}}
            <li
                class="{{ request()->is('admin/facilities*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/facilities/') }}"
                    class="{{ request()->is('admin/facilities*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            apartment
                        </i>
                    </div>

                    <div class="menu-title">
                        Facilities
                    </div>

                </a>

            </li>


            {{-- =================================================
                 BLOGS
            ================================================== --}}
            <li
                class="{{ request()->is('admin/blogs*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/blogs/') }}"
                    class="{{ request()->is('admin/blogs*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            article
                        </i>
                    </div>

                    <div class="menu-title">
                        Blogs
                    </div>

                </a>

            </li>


            {{-- =================================================
                 DEPARTMENTS
            ================================================== --}}
            <li
                class="{{ request()->is('admin/departments*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/departments/') }}"
                    class="{{ request()->is('admin/departments*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            category
                        </i>
                    </div>

                    <div class="menu-title">
                        Departments
                    </div>

                </a>

            </li>


            {{-- =================================================
                 APPOINTMENTS
            ================================================== --}}
            <li
                class="{{ request()->is('admin/appointments*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/appointments/') }}"
                    class="{{ request()->is('admin/appointments*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            event
                        </i>
                    </div>

                    <div class="menu-title">
                        Appointments
                    </div>

                </a>

            </li>


            {{-- =================================================
                 JOBS
            ================================================== --}}
            <li
                class="{{ request()->is('admin/jobs*') && !request()->is('admin/job-applications*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/jobs') }}"
                    class="{{ request()->is('admin/jobs*') && !request()->is('admin/job-applications*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            work
                        </i>
                    </div>

                    <div class="menu-title">
                        Jobs
                    </div>

                </a>

            </li>


            {{-- =================================================
                 JOB APPLICATIONS
            ================================================== --}}
            <li
                class="{{ request()->is('admin/job-applications*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/job-applications') }}"
                    class="{{ request()->is('admin/job-applications*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            assignment
                        </i>
                    </div>

                    <div class="menu-title">
                        Job Applications
                    </div>

                </a>

            </li>


            {{-- =================================================
                 SETTING
            ================================================== --}}
            <li
                class="{{ request()->is('admin/settings*') ? 'mm-active' : '' }}">

                <a
                    href="{{ url('/admin/settings/') }}"
                    class="{{ request()->is('admin/settings*') ? 'active' : '' }}">

                    <div class="parent-icon">
                        <i class="material-icons-outlined">
                            settings
                        </i>
                    </div>

                    <div class="menu-title">
                        Setting
                    </div>

                </a>

            </li>


        </ul>

    </div>

</aside>


{{-- MOBILE OVERLAY --}}
<div id="adminSidebarOverlay"></div>


<style>
    /* =========================================================
   ACTIVE ADMIN MENU
========================================================= */

    .sidebar-wrapper .metismenu>li>a.active,
    .sidebar-wrapper .metismenu>li.mm-active>a {
        background: rgba(13, 110, 253, 0.10) !important;
        color: #0d6efd !important;
        border-radius: 8px !important;
    }

    .sidebar-wrapper .metismenu>li>a.active .parent-icon,
    .sidebar-wrapper .metismenu>li>a.active .menu-title,
    .sidebar-wrapper .metismenu>li.mm-active>a .parent-icon,
    .sidebar-wrapper .metismenu>li.mm-active>a .menu-title {
        color: #0d6efd !important;
    }

    /* Gallery specifically */
    .sidebar-wrapper .metismenu>li>a[href*="/admin/gallery"].active {
        background: rgba(13, 110, 253, 0.10) !important;
        color: #0d6ffd !important;
    }

    .sidebar-wrapper .metismenu>li>a[href*="/admin/gallery"].active .parent-icon,
    .sidebar-wrapper .metismenu>li>a[href*="/admin/gallery"].active .menu-title {
        color: #0d6efd !important;
    }

    /* =========================================================
   SIDEBAR LOGO
========================================================= */

    .sidebar-header .logo-icon img {
        border: none;
        max-width: 180px;
        margin-top: 10px;
        max-height: 55px;

        object-fit: contain;

    }


    /* =========================================================
   CLOSE BUTTON
========================================================= */

    .sidebar-close {

        cursor: pointer;

    }


    .sidebar-close .material-icons-outlined {

        font-size: 22px;

    }
</style>