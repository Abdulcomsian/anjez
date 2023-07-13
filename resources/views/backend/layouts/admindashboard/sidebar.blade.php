<!-- Side-Navbar -->
<div class="container-fluid mt-1">
    <div class="row flex-nowrap" style="min-height: 100%;">
      <div class="col-auto col-md-3 col-xl-2 px-0 bg-white">
        <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white">
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100 mt-3"
            id="menu">
            <li class="nav-item w-100 px-lg-3 px-sm-0 mt-4 {{ request()->is('AdminDashboard') ? 'menu-item-active' : '' }} "  id="one">
                <a href="{{ route('admindashboard.admin-index') }}" class="nav-link align-middle">
                <i class="fs-5 bi-house menu-item-icon"></i>
                <span class="ms-2 d-none d-sm-inline font-noto-sans" p>
                  Dashboard
                </span>
              </a>
            </li>
            <li class="nav-item w-100 px-lg-3 px-sm-0 mt-3 {{ request()->is('users') ? 'menu-item-active' : '' }}" id="two">
                <a href="{{ route('users.index') }}" class="nav-link align-middle">
                <i class="fs-5 bi-people menu-item-icon"></i>
                <span class="ms-2 d-none d-sm-inline font-noto-sans">
                  Users
                </span>
              </a>
            </li>
            <li class="nav-item w-100 px-lg-3 px-sm-0 mt-3 {{ request()->is('courses') ? 'menu-item-active' : '' }} " id="three" >
              <a href="{{ route('courses.index') }}" class="nav-link align-middle">
                <i class="fs-5 bi-card-list menu-item-icon"></i>
                <span class="ms-2 d-none d-sm-inline font-noto-sans ">
                  Courses
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col py-3 overflow-auto">
        <!-- Right Side Content -->

