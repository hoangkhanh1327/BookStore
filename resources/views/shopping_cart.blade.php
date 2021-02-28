@section('title')
    Giỏ hàng
@stop

@extends('layouts.front-end.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <p class="h3">Giỏ hàng ({{ Cart::count()}} sản phẩm)</p>

                <form action="{{ route('cart.updateCart') }}" method="POST">
                @csrf
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Sách</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Cart::content() as $item)
                                <tr>
                                    <td style="width:20%">
                                        <img src="{{ url($item->options->book_image) }}" alt="" class="" style="width:150px; height:237px;">
                                    </td>
                                    <td style="width:20%">
                                        <p>
                                            <a href="{{ route('detail', $item->id) }}"><b>{{ $item->name }}</b></a>
                                        </p>
                                        @if ($item->qty <= 10)
                                            <small class="text-danger">Chỉ còn {{ $item->qty }} cuốn.</small>
                                        @endif
                                        <div>
                                            <button class="btn btn-danger" type="button" id="delete_item" item-id="{{ $item->id }}">Xóa khỏi giỏ hàng</button>
                                        </div>    
                                    </td>
                                    <td><input type="number" name="rowIds[{{$item->rowId}}]" value="{{$item->qty}}" class="number-format"></td>
                                    <td><span class="number-format">{{$item->price}}</span> <span> &nbsp;₫</span></td>
                                    <td><span class="number-format">{{$item->subtotal}}</span> <span> &nbsp;₫</span></td>
                                </tr>
                                {{-- expr --}}
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mb-1">
                        <button class="btn btn-primary" id="update_item" value="update">Cập nhật giỏ hàng</button>
                        <a class="btn btn-primary" href="{{ route('order.create') }}">Thanh toán</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
                <table class="table border">
                    <tbody>
                        <tr>
                            <td>Tổng tiền: </td>
                            <td>
                                <span>
                                    {{ Cart::subtotal() }} &nbsp; đ
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>Thuế: </td>
                            <td>
                                <span>
                                    {{ Cart::tax() }} &nbsp; đ
                                </span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Thành tiền: </td>
                            <td>
                                <p class="h5 text-danger">
                                    <span class="number-format">{{ Cart::total() }} &nbsp; đ</span>
                                </p>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @foreach(Cart::content() as $item)
        <form id="delete_form_{{ $item->id }}"  method="POST" action="{{ route('cart.destroy', $item->rowId) }}">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
@endsection