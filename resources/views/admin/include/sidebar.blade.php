<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            {{-- Home Dashboard --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.home') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            {{-- Product Dashboard --}}
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('admin.products.index') }}">
                <span class="menu-title">Product</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a> 
            </li>
            {{-- Category Dashboard --}}

            <li class="nav-item">
              <a class="nav-link"  href="{{ route('admin.categories.index') }}">
                <span class="menu-title">Category</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>

            {{-- Brand Dashboard --}}
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('admin.brands.index') }}" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Brand</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            
            {{-- Order Dashboard --}}
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('admin.orders.index') }}" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Orders</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>