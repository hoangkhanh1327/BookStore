@section('title')
    Theo dõi đơn hàng
@stop

@extends('layouts.front-end.master')

@section('content')
<div class="container">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Mã số</th>
      <th scope="col">Ngày mua</th>
      <th scope="col">Tên sách</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Trạng thái đơn hàng</th>
      <th scope="col">Hình thức thanh toán</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order)
        <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>{{ $order->created_at }}</td>
            <td>
                {{ $order_details[$order->id][0]->name}} 
            </td>
            <td>{{ $order->total_cost }} ₫</td>
            <td>{{ $order->order_status }}</td>
            <td>COD - Giao tiền khi nhận hàng</td>
        </tr>
    @endforeach   
  </tbody>
</table>
</div>
@endsection