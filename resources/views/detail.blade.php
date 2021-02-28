@section( 'title' )
    {{ $book->name }}
@endsection

@extends('layouts.front-end.master')

@section('content')
<div class="container">
    <div class="row pt-2">
        <div class="col-sm-4 justify-content-center align-self-center">
            <div id="img-container" class="">
                <img src="{{ $book->book_image }}" class="img-fluid" alt="" style="margin-left:11%">
            </div>
        </div>
        <div class="col-sm-8">
            <p class="h5">{{ $book->name }}</p>
            <br>
            <p>Tác Giả: <span class="text-primary">{{ $book->author_name }}</span></p>
            <div>
                <p class="h3 float-left"><span class="font-weight-bold">{{ $book->price }}&nbsp;&nbsp;</span></p>
                <p class="h3 float-left"><span class="h6"><strike>{{ $book->price }}</strike></span></p>
                <p class="h3 float-left"><span class="h6">&nbsp;&nbsp;-{{ $book->saleoff }}%</span></p>
            </div>
            <br>
            <br>
            <form action="{{ route('add_cart') }}" id="add_cart_form" method="POST">
                {{ csrf_field() }}
                <input id="book_id" name="book_id" value="{{ $book->id }}" hidden="hidden">
                <!-- <input id="quantity" name="quantity" hidden="hidden"> -->
                <p>Số Lượng</p>
                <div class="input-group w-25">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-danger btn-xs btn-number" data-type="minus" data-field="quant[2]">
                            <span class="fa fa-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                            <span class="fa fa-plus"></span>
                        </button>
                    </span>
                </div>
                <div class="input-group w-50 mt-3">
                    <button type="submit" id="add_to_cart" class="btn btn-primary">Thêm Vào Giỏ Hàng</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-sm-12">
            <p class="h3">Thông tin sách</p>
            <hr>
            <table class="table table-striped w-50">
                <tbody>
                    <tr>
                        <th scope="col" class=" w-25">Tác giả</th>
                        <td><b>{{ $book->author_name }}</b></td>
                    </tr>
                    <tr>
                        <th scope="col" class="">Nhà xuất bản</th>
                        <td><b>{{ $book->publishing_house }}</b></td>
                    </tr>
                    <tr>
                        <th scope="col" class="">Ngày xuất bản</th>
                        <td><b>{{ $book->publish_date }}</b></td>
                    </tr>
                    <tr>
                        <th scope="col" class="">Số Trang</th>
                        <td><b>{{ $book->number_of_pages }}</b></td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>

    <div class="row pt-2">
        <div class="col-sm-12">
            <p class="h3">Giới Thiệu Sách</p>
            <hr>
            {!! $book->description !!}
        </div>       
    </div>

    <div class="row pt-2">
        <div class="col-sm-12">
            <p class="h3">Giới thiệu tác giả</p>
            <hr>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-sm-12">
            <p class="h3">Bình luận</p>
            <hr>
            @foreach($comments as $comment)
                <div class="col-sm-12 border border-primary">
                    <p class="h5">{{ $comment->title }}</p>
                    <p>{{ $comment->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection