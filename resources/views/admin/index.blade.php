@section('title')
Dashboard
@stop

@extends('layouts.back-end.master')

@section('content')
<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item w-100">
    <div class="row gap-20">
      <!-- #Toatl Visits ==================== -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Tổng Lượt Truy Cập</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- #Total Page Views ==================== -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Tổng Lượt Xem Trang</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash2"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- #Unique Visitors ==================== -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Số Người Truy Cập</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash3"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- #Bounce Rate ==================== -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Tỉ Lệ Thoát</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash4"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="masonry-item col-12">
    <!-- #Site Visits ==================== -->
    <div class="bd bgc-white">
      <div class="peers fxw-nw@lg+ ai-s">
        <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
          <div class="layers">
            <div class="layer w-100 mB-10">
              <h6 class="lh-1">Site Visits</h6>
            </div>
            <div class="layer w-100">
              <div id="world-map-marker"></div>
            </div>
          </div>
        </div>
        <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
          <div class="layers">
            <div class="layer w-100">
              <!-- Progress Bars -->
              <div class="layers">
                <div class="layer w-100">
                  <h5 class="mB-5">100k</h5>
                  <small class="fw-600 c-grey-700">Visitors From USA</small>
                  <span class="pull-right c-grey-600 fsz-sm">50%</span>
                  <div class="progress mT-10">
                    <div class="progress-bar bgc-deep-purple-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span></div>
                  </div>
                </div>
                <div class="layer w-100 mT-15">
                  <h5 class="mB-5">1M</h5>
                  <small class="fw-600 c-grey-700">Visitors From Europe</small>
                  <span class="pull-right c-grey-600 fsz-sm">80%</span>
                  <div class="progress mT-10">
                    <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">80% Complete</span></div>
                  </div>
                </div>
                <div class="layer w-100 mT-15">
                  <h5 class="mB-5">450k</h5>
                  <small class="fw-600 c-grey-700">Visitors From Australia</small>
                  <span class="pull-right c-grey-600 fsz-sm">40%</span>
                  <div class="progress mT-10">
                    <div class="progress-bar bgc-light-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%;"> <span class="sr-only">40% Complete</span></div>
                  </div>
                </div>
                <div class="layer w-100 mT-15">
                  <h5 class="mB-5">1B</h5>
                  <small class="fw-600 c-grey-700">Visitors From India</small>
                  <span class="pull-right c-grey-600 fsz-sm">90%</span>
                  <div class="progress mT-10">
                    <div class="progress-bar bgc-blue-grey-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">90% Complete</span></div>
                  </div>
                </div>
              </div>

              <!-- Pie Charts -->
              <div class="peers pT-20 mT-20 bdT fxw-nw@lg+ jc-sb ta-c gap-10">
                <div class="peer">
                  <div class="easy-pie-chart" data-size="80" data-percent="75" data-bar-color="#f44336">
                    <span></span>
                  </div>
                  <h6 class="fsz-sm">New Users</h6>
                </div>
                <div class="peer">
                  <div class="easy-pie-chart" data-size="80" data-percent="50" data-bar-color="#2196f3">
                    <span></span>
                  </div>
                  <h6 class="fsz-sm">New Purchases</h6>
                </div>
                <div class="peer">
                  <div class="easy-pie-chart" data-size="80" data-percent="90" data-bar-color="#ff9800">
                    <span></span>
                  </div>
                  <h6 class="fsz-sm">Bounce Rate</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <!-- #Monthly Stats ==================== -->
    <div class="bd bgc-white">
      <div class="layers">
        <div class="layer w-100 pX-20 pT-20">
          <h6 class="lh-1">Số Liệu Thống Kê Theo Tháng</h6>
        </div>
        <div class="layer w-100 p-20">
          <canvas id="line-chart" height="220"></canvas>
        </div>
        <div class="layer bdT p-20 w-100">
          <div class="peers ai-c jc-c gapX-20">
            <div class="peer">
              <span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span>
              <small class="c-grey-500 fw-600">APPL</small>
            </div>
            <div class="peer fw-600">
              <span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span>
              <small class="c-grey-500 fw-600">Average</small>
            </div>
            <div class="peer fw-600">
              <span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span>
              <small class="c-grey-500 fw-600">Sales</small>
            </div>
            <div class="peer fw-600">
              <span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span>
              <small class="c-grey-500 fw-600">Profit</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <!-- #Todo ==================== -->
    <div class="bd bgc-white p-20">
      <div class="layers">
        <div class="layer w-100 mB-10">
          <h6 class="lh-1">Todo List</h6>
        </div>
        <div class="layer w-100">
          <ul class="list-task list-group" data-role="tasklist">
            <li class="list-group-item bdw-0" data-role="task">
              <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                <label for="inputCall1" class="peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">Kiểm sách tồn kho</span>
                </label>
              </div>
            </li>
            <li class="list-group-item bdw-0" data-role="task">
              <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
                <label for="inputCall2" class="peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">Họp nhân viên</span>
                  <span class="peer">
                    <span class="badge badge-pill fl-r badge-success lh-0 p-10">2 Days</span>
                  </span>
                </label>
              </div>
            </li>
            <li class="list-group-item bdw-0" data-role="task">
              <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                <input type="checkbox" id="inputCall3" name="inputCheckboxesCall" class="peer">
                <label for="inputCall3" class="peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">Tiến hành báo cáo theo quý</span>
                  <span class="peer">
                    <span class="badge badge-pill fl-r badge-danger lh-0 p-10">3 Minutes</span>
                  </span>
                </label>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="masonry-item col-md-6">
    <!-- #Sales Report ==================== -->
    <div class="bd bgc-white">
      <div class="layers">
        <div class="layer w-100 p-20">
          <h6 class="lh-1">Báo Cáo Bán Hàng</h6>
        </div>
        <div class="layer w-100">
          <div class="bgc-light-blue-500 c-white p-20">
            <div class="peers ai-c jc-sb gap-40">
              <div class="peer peer-greed">
                <h5>Tháng 1 - 2021</h5>
                <p class="mB-0">Báo Cáo Bán Hàng</p>
              </div>
              <div class="peer">
                <h3 class="text-right">{{ $profit }} đ</h3>
              </div>
            </div>
          </div>
          <div class="table-responsive p-20">
            <table class="table">
              <thead>
                <tr>
                  <th class="bdwT-0">Sách</th>
                  <th class="bdwT-0">Số lượng</th>
                  <th class="bdwT-0">Giá</th>
                  <th class="bdwT-0">Khuyến mãi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($books as $book)
                <tr>
                  <td class="fw-600">{{ $book->name }}</td>
                  <td>{{ $book->quantity }}</td>
                  <td>{{ $book->price }}</td>
                  <td><span class="text-success">{{ $book->saleoff }}</span></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="ta-c bdT w-100 p-20">
        <a href="#">Xem toàn bộ</a>
      </div>
    </div>
  </div>

  <div class="masonry-item col-md-6">
    <!-- #Chat ==================== -->
    <div class="bd bgc-white">
      <div class="layers">
        <div class="layer w-100 p-20">
          <h6 class="lh-1">Quick Chat</h6>
        </div>
        <div class="layer w-100">
          <!-- Chat Box -->
          <div class="bgc-grey-200 p-20 gapY-15">
            <!-- Chat Conversation -->
          </div>
          <!-- Chat Send -->
          <div class="p-20 bdT bgc-white">
            <div class="pos-r">
              <input type="text" class="form-control bdrs-10em m-0" placeholder="Say something...">
              <button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                <i class="fa fa-paper-plane-o"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection