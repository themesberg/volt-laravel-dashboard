<nav id="sidebarMenu" class="sidebar d-md-block bg-dark text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="user-avatar lg-avatar me-4">
            <img src="/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
              alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h6">Hi, Jane</h2>
            <a href="/login" class="btn btn-secondary text-dark btn-xs"><span
                class="me-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
          <a href="/index.html" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
          </a>
        </li>
        <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
          <a href="/dashboard" class="nav-link">
            <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
            <span class="sidebar-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://demo.themesberg.com/volt-pro/pages/kanban.html" target="_blank" class="nav-link d-flex justify-content-between">
            <span>
              <span class="sidebar-icon"><span class="fas fa-th"></span></span>
              <span class="sidebar-text">Kanban </span>
            </span>
            <span>
              <span class="badge badge-md bg-secondary ms-1 text-dark">Pro</span>
            </span>
          </a>
        </li>
        <li class="nav-item {{ Request::segment(1) == 'transactions' ? 'active' : '' }}">
          <a href="/transactions" class="nav-link">
            <span class="sidebar-icon"><span class="fas fa-hand-holding-usd"></span></span>
            <span class="sidebar-text">Transactions</span>
          </a>
        </li>
        <li class="nav-item {{ Request::segment(1) == 'profile' ? 'active' : '' }}">
          <a href="/profile" class="nav-link">
            <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
            <span class="sidebar-text">Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <span
            class="nav-link {{ Request::segment(1) !== 'bootstrap-tables' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-app">
            <span>
              <span class="sidebar-icon"><span class="fas fa-table"></span></span>
              <span class="sidebar-text">Tables</span>
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
          </span>
          <div class="multi-level collapse {{ Request::segment(1) == 'bootstrap-tables' ? 'show' : '' }}"
            role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item {{ Request::segment(1) == 'bootstrap-tables' ? 'active' : '' }}">
                <a class="nav-link" href="/bootstrap-tables">
                  <span class="sidebar-text">Bootstrap Tables</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <span
            class="nav-link collapsed d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-pages">
            <span>
              <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
              <span class="sidebar-text">Page examples</span>
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
          </span>
          <div class="multi-level collapse" role="list"
            id="submenu-pages" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"> 
                  <span class="sidebar-text">Sign In</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                  <span class="sidebar-text">Sign Up</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('forgot-password') }}">
                  <span class="sidebar-text">Forgot password</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('reset-password', $token ?? '') }}">
                  <span class="sidebar-text">Reset password</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/lock">
                  <span class="sidebar-text">Lock</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/404">
                  <span class="sidebar-text">404 Not Found</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/500">
                  <span class="sidebar-text">500 Not Found</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <span
            class="nav-link collapsed d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-components">
            <span>
              <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
              <span class="sidebar-text">Components</span>
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
          </span>
          <div class="multi-level collapse {{ Request::segment(1) == 'buttons' || Request::segment(1) == 'notifications' || Request::segment(1) == 'forms' || Request::segment(1) == 'modals' || Request::segment(1) == 'typography' ? 'show' : '' }}" role="list"
            id="submenu-components" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item">
                <a class="nav-link" target="_blank"
                  href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/accordions/">
                  <span class="sidebar-text">All Components</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(1) == 'buttons' ? 'active' : '' }}">
                <a class="nav-link" href="/buttons">
                  <span class="sidebar-text">Buttons</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(1) == 'notifications' ? 'active' : '' }}">
                <a class="nav-link" href="/notifications">
                  <span class="sidebar-text">Notifications</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(1) == 'forms' ? 'active' : '' }}">
                <a class="nav-link" href="/forms">
                  <span class="sidebar-text">Forms</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(1) == 'modals' ? 'active' : '' }}">
                <a class="nav-link" href="/modals">
                  <span class="sidebar-text">Modals</span>
                </a>
              </li>
              <li class="nav-item {{ Request::segment(1) == 'typography' ? 'active' : '' }}">
                <a class="nav-link" href="/typography">
                  <span class="sidebar-text">Typography</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
        <li class="nav-item">
          <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank"
            class="nav-link d-flex align-items-center">
            <span class="sidebar-icon"><span class="fas fa-book"></span></span>
            <span class="sidebar-text">Documentation <span
                class="badge badge-md bg-secondary ms-1 text-dark">v1.3</span></span>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="/assets/img/themesberg.svg" height="20" width="20" alt="Themesberg Logo">
            </span>
            <span class="sidebar-text">Themesberg</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="../../pages/upgrade-to-pro.html"
            class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
            <span class="sidebar-icon"><span class="fas fa-rocket me-2"></span></span> <span>Upgrade to Pro</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>