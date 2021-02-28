
      <!-- #Left Sidebar ==================== -->
      <div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="https://appseed.us/admin-dashboards/django-dashboard-adminator">
                  <div class="peers ai-c fxw-nw">
                    <div class="peer">
                      <div class="logo">
                        <img src="/storage/includes/images/logo.png" alt="">
                      </div>
                    </div>
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text">Administrator</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ### $Sidebar Menu ### -->
          <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="{{ route('dashboard') }}">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-teal-500 ti-view-list-alt"></i>
                </span>
                <span class="title">Quản lý bán hàng</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown">
                  <a href="{{ route('order_list') }}">
                    <span>Quản lý đơn hàng</span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a href="javascript:void(0);">
                    <span>Quản lý tài nguyên</span>
                    <span class="arrow">
                      <i class="ti-angle-right"></i>
                    </span>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="{{ route('book_list') }}">Danh sách sách</a>
                    </li>
                    <li>
                      <a href="{{ route('category_list') }}">Danh sách thể loại</a>
                    </li>
                    <li>
                      <a href="{{ route('author_list') }}">Danh sách tác giả</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-teal-500 ti-view-list-alt"></i>
                </span>
                <span class="title">Quản lý tài khoản</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown">
                  <a href="{{ route('account_list') }}">
                    <span>Danh sách tài khoản</span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a href="javascript:void(0);">
                    <span>Cấp quyền</span>
                  </a>
                </li>
              </ul>
            </li>            
          </ul>
        </div>
      </div>
