<header class="top-header" id="adminTopHeader">

  <nav class="navbar navbar-expand align-items-center gap-3">

    {{-- SIDEBAR TOGGLE --}}
    <div class="admin-menu-toggle">
      <button
        type="button"
        id="adminSidebarToggle"
        aria-label="Toggle Sidebar">
        <i class="material-icons-outlined">menu</i>
      </button>
    </div>


    {{-- PAGE HEADER SPACE --}}
    <div class="flex-grow-1"></div>


    {{-- RIGHT SIDE --}}
    <ul class="navbar-nav gap-2 nav-right-links align-items-center">

      <li class="nav-item dropdown">

        <a
          href="javascript:;"
          class="dropdown-toggle dropdown-toggle-nocaret"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          <img
            src="{{  asset('assets/img/atulyalogo.png') }}"
            class="rounded-circle p-1 "
            width="45"
            height="45"
            alt="Admin">
        </a>


        {{-- USER DROPDOWN --}}
        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">




          {{-- DASHBOARD --}}
          <a
            href="{{ route('admin.dashboard') }}"
            class="dropdown-item d-flex align-items-center gap-2">
            <i class="material-icons-outlined">
              dashboard
            </i>

            <span>Dashboard</span>
          </a>


          {{-- SETTING --}}
          <a
            href="{{ url('/admin/settings/') }}"
            class="dropdown-item d-flex align-items-center gap-2">
            <i class="material-icons-outlined">
              settings
            </i>

            <span>Setting</span>
          </a>


          <div class="dropdown-divider"></div>


          {{-- LOGOUT --}}
          <form
            action="{{ route('admin.logout') }}"
            method="POST"
            class="m-0">
            @csrf

            <button
              type="submit"
              class="dropdown-item d-flex align-items-center gap-2 text-danger">
              <i class="material-icons-outlined">
                logout
              </i>

              <span>Logout</span>
            </button>

          </form>

        </div>

      </li>

    </ul>

  </nav>

</header>


{{-- =========================================================
     SIDEBAR / HEADER CSS
========================================================= --}}
<style>
  /* =========================================================
   LAYOUT VARIABLES
========================================================= */

  :root {
    --atulya-sidebar-width: 280px;
  }


  /* =========================================================
   SIDEBAR
========================================================= */

  .sidebar-wrapper {

    width: var(--atulya-sidebar-width) !important;

    position: fixed !important;

    top: 0 !important;
    left: 0 !important;

    height: 100vh !important;

    z-index: 1040 !important;

    transition:
      transform 0.3s ease,
      left 0.3s ease !important;

  }


  /* =========================================================
   MAIN CONTENT
========================================================= */

  .main-wrapper {

    margin-left: var(--atulya-sidebar-width) !important;

    transition:
      margin-left 0.3s ease !important;

  }


  /* =========================================================
   TOP HEADER
========================================================= */

  .top-header {

    left: var(--atulya-sidebar-width) !important;

    width: calc(100% - var(--atulya-sidebar-width)) !important;

    transition:
      left 0.3s ease,
      width 0.3s ease !important;

    z-index: 1030 !important;

  }


  /* =========================================================
   COLLAPSED STATE
========================================================= */

  body.atulya-sidebar-collapsed .sidebar-wrapper {

    transform: translateX(-100%) !important;

  }


  body.atulya-sidebar-collapsed .main-wrapper {

    margin-left: 0 !important;

  }


  body.atulya-sidebar-collapsed .top-header {

    left: 0 !important;

    width: 100% !important;

  }


  /* =========================================================
   TOGGLE BUTTON
========================================================= */

  .admin-menu-toggle {

    display: flex;

    align-items: center;

    justify-content: center;

  }


  .admin-menu-toggle button {

    width: 42px;

    height: 42px;

    padding: 0;

    border: 0;

    outline: 0;

    background: transparent;

    border-radius: 9px;

    display: flex;

    align-items: center;

    justify-content: center;

    cursor: pointer;

    color: #333;

    transition:
      background 0.2s ease,
      color 0.2s ease;

  }


  .admin-menu-toggle button:hover {

    background: rgba(13, 110, 253, 0.08);

    color: #0d6efd;

  }


  .admin-menu-toggle .material-icons-outlined {

    font-size: 25px;

  }


  /* =========================================================
   DROPDOWN
========================================================= */

  .dropdown-user {

    min-width: 235px;

    border: 0;

    border-radius: 12px;

    padding: 6px;

  }


  .dropdown-user .dropdown-item {

    border-radius: 8px;

    padding: 10px 12px;

    transition:
      background 0.2s ease,
      color 0.2s ease;

  }


  .dropdown-user .dropdown-item:hover {

    background: #f1f5ff;

  }


  .dropdown-user .dropdown-item.text-danger:hover {

    background: #fff1f1;

    color: #dc3545 !important;

  }


  /* =========================================================
   SIDEBAR OVERLAY
========================================================= */

  #adminSidebarOverlay {

    display: none;

    position: fixed;

    inset: 0;

    background: rgba(0, 0, 0, 0.45);

    z-index: 1035;

  }


  #adminSidebarOverlay.show {

    display: block;

  }


  /* =========================================================
   MOBILE
========================================================= */

  @media (max-width: 1199.98px) {

    .sidebar-wrapper {

      transform: translateX(-100%) !important;

    }


    .main-wrapper {

      margin-left: 0 !important;

    }


    .top-header {

      left: 0 !important;

      width: 100% !important;

    }


    body.atulya-sidebar-mobile-open .sidebar-wrapper {

      transform: translateX(0) !important;

    }

  }


  /* =========================================================
   SMALL MOBILE
========================================================= */

  @media (max-width: 575.98px) {

    :root {
      --atulya-sidebar-width: 270px;
    }


    .admin-menu-toggle button {

      width: 40px;

      height: 40px;

    }


    .admin-menu-toggle .material-icons-outlined {

      font-size: 23px;

    }

  }
</style>


<script>
  document.addEventListener('DOMContentLoaded', function() {

    const toggleButton =
      document.getElementById('adminSidebarToggle');

    const overlay =
      document.getElementById('adminSidebarOverlay');

    const closeButton =
      document.querySelector('.sidebar-close');


    if (!toggleButton) {
      return;
    }


    /* =====================================================
       MOBILE ONLY
       Script works only below 1200px
    ====================================================== */

    function isMobile() {
      return window.innerWidth <= 1199;
    }


    toggleButton.addEventListener('click', function(event) {

      event.preventDefault();
      event.stopPropagation();


      // Desktop par kuch bhi mat karo
      if (!isMobile()) {
        return;
      }


      document.body.classList.toggle(
        'atulya-sidebar-mobile-open'
      );


      if (overlay) {

        overlay.classList.toggle('show');

      }

    });


    /* =====================================================
       CLOSE BUTTON
    ====================================================== */

    if (closeButton) {

      closeButton.addEventListener('click', function(event) {

        event.preventDefault();
        event.stopPropagation();


        // Desktop par kuch nahi
        if (!isMobile()) {
          return;
        }


        document.body.classList.remove(
          'atulya-sidebar-mobile-open'
        );


        if (overlay) {

          overlay.classList.remove('show');

        }

      });

    }


    /* =====================================================
       OVERLAY
    ====================================================== */

    if (overlay) {

      overlay.addEventListener('click', function() {

        if (!isMobile()) {
          return;
        }


        document.body.classList.remove(
          'atulya-sidebar-mobile-open'
        );


        overlay.classList.remove('show');

      });

    }


    /* =====================================================
       RESIZE
       If screen becomes desktop, remove mobile state
    ====================================================== */

    window.addEventListener('resize', function() {

      if (!isMobile()) {

        document.body.classList.remove(
          'atulya-sidebar-mobile-open'
        );


        if (overlay) {

          overlay.classList.remove('show');

        }

      }

    });

  });
</script>