<ul class="list-group">
    <a class="list-group-item" href="#">Sách Bán Chạy Trong Tuần</a>
    <a class="list-group-item" href="#">Sách Bán Chạy Trong Tháng</a>
    <a class="list-group-item" href="#">Sách Mới Xuất Bản</a>
    <div class="dropdown-divider"></div>
    
    @foreach ($categories as $key => $childCate)
    <div class="dropright">
        <a class="list-group-item dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $key }}</a>
        <div class="memu-table-vi dropdown-menu ml-4" style="font-size: 13px;">
            <div class="row">
                <div class="col-md-4">
                    <p class="h5 text-center">Sách</p>
                    @php
                        $count = 0
                    @endphp
                    @foreach ($childCate as $cate)
                        <a class="dropdown-item text-justify" href="">{{ $cate->name }}</a>
                        @php
                            $count++
                        @endphp
                        @if ($count == 6) 
                        @break
                        @endif
                    @endforeach
                    <a class="dropdown-item text-justify font-weight-bold" href="">Xem Tất Cả</a>
                </div>
                <div class="col-md-4">
                    <p class="h5 text-center">Tác Giả</p>
                    @foreach ($authors as $author)
                        <a class="dropdown-item text-justify" href="">{{ $author->author_name }}</a>
                        @if ($author->id == 6)
                        @break
                        @endif
                    @endforeach
                    <a class="dropdown-item text-justify font-weight-bold" href="">Xem Tất Cả</a>
                </div>
                <div class="col-md-4">
                    <p class="h5 text-center">Nhà Xuất Bản</p>
                    <a class="dropdown-item text-justify" href="">NXB Kim Đồng</a>
                    <a class="dropdown-item text-justify" href="">NXB Trẻ</a>
                    <a class="dropdown-item text-justify font-weight-bold" href="">Xem Tất Cả</a>
                </div>
            </div>
        </div>
        
    </div>
    @endforeach
</ul>