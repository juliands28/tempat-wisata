            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <a href="{{route('home')}}"><img src="/images/Tripsgent.svg" alt="" class="my-4" /></a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{route('admin-dashboard')}}" class="list-group-item list-group-item-action {{ (request()->is('admin')) ? 'active' : '' }}">Dashboard</a
            >
            <a
              href="{{route('travel.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/travel*')) ? 'active' : '' }}"
              >Manage Travel</a
            >
            <a
              href="{{route('gallery.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/gallery*')) ? 'active' : '' }}"
              >Galeri Wisata</a
            >
            <a
              href="{{ url('admin/change-password') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/change-password*')) ? 'active' : '' }}"
              >Ganti Password</a
            > 
            
            <form action="{{ url('logout') }}" method="POST">
              @csrf          
              <button class="btn btn-primary list-group-item list-group-item-action" type="submit">Logout</button>
            </form>   
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down" aria-label="Toggle navigation"          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
          <!-- end nav -->

          <!-- page content -->
         <div id="page-content-wrapper">
            <nav
                class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
                data-aos="fade-down" aria-label="Toggle navigation"
              >
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>

              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>