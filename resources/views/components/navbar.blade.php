@section('navbar')
<div class="d-block">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><b>BookLovers</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse pl-4" id="navbarContent">
        <form class="form-inline ml-5 mr-5 w-50" method="GET" action="{{ route('search') }}">
          
          <div class="input-group w-100">
            <input class="form-control" type="text" name="search_txt" placeholder="Nhập tên sách, tác giả, NXB, ...">
            <div class="input-group-append pl-0">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search mr-1"></i>Tìm Kiếm
              </button>
            </div>
          </div>
        </form>
        <ul class="navbar-nav ml-5 mr-3">
          @if (Auth::guest())
            <li class="nav-item border border-white rounded-lg mr-0">
              <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
            </li>
            <li class="nav-item border border-white rounded-lg mr-0">
              <a class="nav-link" href="{{ route('register') }}">Đăng ký</a>
            </li>
          @else
            <li class="nav-item border border-white rounded-lg mr-0 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown_user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  @php
                      echo substr(Auth::user()->name, 0, 8);
                  @endphp
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown_user">
                <a class="dropdown-item" href="{{ route('get_info') }}">Thay đổi thông tin</a>
                <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                <a class="dropdown-item" href="{{ route('follow_order') }}">Theo dõi đơn hàng</a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button class="dropdown-item" type="submit">Đăng xuất</button>
                </form>
              </div>
            </li>
          @endif
          
        </ul>
        <ul class="navbar-nav">
          <li nav-item>
            <div class="border border-white rounded-lg mr-0 pt-2 pb-2 pl-4 pr-4">
              <a href="{{ route('cart_index') }}" rel="notfollow" class="text-decoration-none text-dark">
                <i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>
                <span class="">Giỏ hàng</span>
                <span class="cart-count ml-1 bg-warning pl-1 pr-1">{{Cart::count()}}</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
@show