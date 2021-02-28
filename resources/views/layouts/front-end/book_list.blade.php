<div class="col-sm-12 p-0 border border-primary rounded">
    <p class="h4 text-center tag">{{ $key }}</p>
    <ul class="list-group list-group-horizontal-sm float-right">
        @php
            $count = 0
        @endphp
        @foreach ($childCate as $cate)
            <li class="list-group-item non-border"><a class="text-decoration-none" href="">{{ $cate->name }}</a></li>
            @php
                $count++
            @endphp
            @if ($count == 4)
            @break
            @endif
        @endforeach
        <li class="list-group-item non-border"><a class="text-decoration-none" href=""><b>Tất Cả Sách</b></a></li>
    </ul>
</div>

<div class="col-sm-12 mt-2 border border-primary rounded">
    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
        <li class="nav-item text-center col-sm-4" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#{{ $key== 'Sách Tiếng Việt' ? 'vi' : 'en' }}_newest" role="tab" aria-controls="home" aria-selected="true">Sách Mới</a>
        </li>
        <li class="nav-item text-center col-sm-4" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sách Bán Chạy</a>
        </li>

        <li class="nav-item text-center col-sm-4" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sách Đề Xuất</a>
        </li>
    </ul>
    <div class="tab-content w-100 mt-2" id="myTabContent">
        <div class="tab-pane fade show active" id="{{ $key== 'Sách Tiếng Việt' ? 'vi' : 'en' }}_newest" role="tabpanel" aria-labelledby="home-tab">
            <div class="card-group">
                @foreach ($books[$key] as $book)
                        <div class="card mr-4">
                            <img src="{{ $book->book_image }}" class="card-img-top mx-auto" style="max-height:300px; max-width:250px;" alt="...">
                            <div class="card-body">
                                <a class="card-title font-weight-bold text-decoration-none text-wrap" href="{{ route('detail', $book->id) }}">{{ $book->name }}</a>
                                <p class="card-text">{{ $book->author_name }}</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text">{{ $book->price }}</p>
                                <small class="card-text">Có nhận xét</small>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="table-responsive">
                <table class="table w-100">
                    <tbody>
                        <td>Sách 4</td>
                        <td>Sách 5</td>
                        <td>Sách 6</td>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="table-responsive">
                <table class="table w-100">
                    <tbody>
                        <td>Sách 7</td>
                        <td>Sách 8</td>
                        <td>Sách 9</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>