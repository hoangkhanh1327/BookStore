@section('title')
    Thanh toán
@stop

@extends('layouts.front-end.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <form class="form" action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="">
                    <p class="h4">Thông tin và địa chỉ người nhận hàng</p>
                    <div class="mb-3">
                        <label for="name">Họ và tên</label>
                        <input type="text" class="form-control" name="name" required value="{{ Auth::user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="name">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" required value="{{ Auth::user()->phone_number }}">
                    </div>
                    <div class="mb-3">
                        <label for="address">Địa chỉ nhận hàng</label>
                        <input type="text" class="form-control" name="address" required value="{{ Auth::user()->address }}">
                    </div>
                </div>
                <div class="">
                    <h4 class="mb-3">Chọn phương thức thanh toán</h4>
                    <div class="input-group-mb3">
                        <input type="radio" name="method_payment" id="cod" value="cod" checked>
                        <label for="cod">Thanh toán bằng tiền mặt khi nhận hàng</label> 
                    </div>
                    <div class="mb-3">
                        <input type="radio" name="method_payment" id="cash" value="cash">
                        <label for="cash">Thanh toán thông qua thẻ tín dụng</label> 
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Đặt mua <i class="fa-paper-plane-o" aria-hidden="true"></i></button>
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
@endsection