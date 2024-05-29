<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">


        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#name" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-account-tie"></i>
              </span>
              <span class="menu-title">Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="name">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('profile.show') }}">Profile</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('logout') }}">Logout</a></li>
              </ul>
            </div>
          </li>




      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('redirect') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Home</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('view_category') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Categories</span>
        </a>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('view_add_product') }}">Add Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('view-show-product') }}">Show Products</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('show_order') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>

    </ul>
  </nav>
