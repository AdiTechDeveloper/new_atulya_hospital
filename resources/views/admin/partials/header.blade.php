<header class="top-header">
  <nav class="navbar navbar-expand align-items-center gap-4">
    <div class="btn-toggle">
      <a href="#"><i class="material-icons-outlined">menu</i></a>
    </div>
    <div class="search-bar flex-grow-1">
      {{-- <div class="position-relative">
          <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Search">
          <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
          <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
          <div class="search-popup p-3">
            <div class="card rounded-4 overflow-hidden">
              <div class="card-header d-lg-none">
                <div class="position-relative">
                  <input class="form-control rounded-5 px-5 mobile-search-control" type="text" placeholder="Search">
                  <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                  <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
                 </div>
              </div>
              <div class="card-body search-content">
                <p class="search-title">Recent Searches</p>
                <div class="d-flex align-items-start flex-wrap gap-2 kewords-wrapper">
                  <a href="#" class="kewords"><span>Angular Template</span><i
                      class="material-icons-outlined fs-6">search</i></a>
                  <a href="#" class="kewords"><span>Dashboard</span><i
                      class="material-icons-outlined fs-6">search</i></a>
                  <a href="#" class="kewords"><span>Admin Template</span><i
                      class="material-icons-outlined fs-6">search</i></a>
                  <a href="#" class="kewords"><span>Bootstrap 5 Admin</span><i
                      class="material-icons-outlined fs-6">search</i></a>
                  <a href="#" class="kewords"><span>Html eCommerce</span><i
                      class="material-icons-outlined fs-6">search</i></a>
                  <a href="#" class="kewords"><span>Sass</span><i
                      class="material-icons-outlined fs-6">search</i></a>
                  <a href="#" class="kewords"><span>laravel 9</span><i
                      class="material-icons-outlined fs-6">search</i></a>
                </div>
                <hr>
                <p class="search-title">Tutorials</p>
                <div class="search-list d-flex flex-column gap-2">
                  <div class="search-list-item d-flex align-items-center gap-3">
                    <div class="list-icon">
                      <i class="material-icons-outlined fs-5">play_circle</i>
                    </div>
                    <div class="">
                      <h5 class="mb-0 search-list-title ">Wordpress Tutorials</h5>
                    </div>
                  </div>
                  <div class="search-list-item d-flex align-items-center gap-3">
                    <div class="list-icon">
                      <i class="material-icons-outlined fs-5">shopping_basket</i>
                    </div>
                    <div class="">
                      <h5 class="mb-0 search-list-title">eCommerce Website Tutorials</h5>
                    </div>
                  </div>
  
                  <div class="search-list-item d-flex align-items-center gap-3">
                    <div class="list-icon">
                      <i class="material-icons-outlined fs-5">laptop</i>
                    </div>
                    <div class="">
                      <h5 class="mb-0 search-list-title">Responsive Design</h5>
                    </div>
                  </div>
                </div>
  
                <hr>
                <p class="search-title">Members</p>
  
                <div class="search-list d-flex flex-column gap-2">
                  <div class="search-list-item d-flex align-items-center gap-3">
                    <div class="memmber-img">
                      <img src="{{ asset('admin/assets/images/avatars/01.png') }}" width="32" height="32" class="rounded-circle" alt="">
    </div>
    <div class="">
      <h5 class="mb-0 search-list-title ">Andrew Stark</h5>
    </div>
    </div>

    <div class="search-list-item d-flex align-items-center gap-3">
      <div class="memmber-img">
        <img src="{{ asset('admin/assets/images/avatars/02.png') }}" width="32" height="32" class="rounded-circle" alt="">
      </div>
      <div class="">
        <h5 class="mb-0 search-list-title ">Snetro Jhonia</h5>
      </div>
    </div>

    <div class="search-list-item d-flex align-items-center gap-3">
      <div class="memmber-img">
        <img src="{{ asset('admin/assets/images/avatars/03.png') }}" width="32" height="32" class="rounded-circle" alt="">
      </div>
      <div class="">
        <h5 class="mb-0 search-list-title">Michle Clark</h5>
      </div>
    </div>

    </div>
    </div>
    <div class="card-footer text-center bg-transparent">
      <a href="#  " class="btn w-100">See All Search Results</a>
    </div>
    </div>
    </div>
    </div> --}}
    </div>
    <ul class="navbar-nav gap-1 nav-right-links align-items-center">
    <li class="nav-item dropdown">

        <a href="#"
           class="dropdown-toggle dropdown-toggle-nocaret"
           data-bs-toggle="dropdown">

            <img
                src="{{ asset('admin/assets/images/avatars/01.png') }}"
                class="rounded-circle p-1 border"
                width="45"
                height="45"
                alt="Admin"
            >

        </a>

        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">

            {{-- User --}}
            <div class="px-3 py-3 text-center">
                <img
                    src="{{ asset('admin/assets/images/avatars/01.png') }}"
                    class="rounded-circle p-1 shadow mb-2"
                    width="70"
                    height="70"
                    alt="Admin"
                >

                <h6 class="user-name mb-0 fw-bold">
                    {{ auth()->user()->name ?? 'Admin' }}
                </h6>
            </div>

            <hr class="dropdown-divider">

            {{-- Dashboard --}}
            <a
                class="dropdown-item d-flex align-items-center gap-2 py-2"
                href="{{ route('admin.dashboard') }}"
            >
                <i class="material-icons-outlined">dashboard</i>
                <span>Dashboard</span>
            </a>

            {{-- Setting --}}
            <a
                class="dropdown-item d-flex align-items-center gap-2 py-2"
               href="{{ url('/admin/settings/') }}"
            >
                <i class="material-icons-outlined">settings</i>
                <span>Setting</span>
            </a>

            {{-- Logout --}}
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf

                <button
                    type="submit"
                    class="dropdown-item d-flex align-items-center gap-2 py-2"
                >
                    <i class="material-icons-outlined">logout</i>
                    <span>Logout</span>
                </button>
            </form>

        </div>
    </li>
</ul>

  </nav>
</header>