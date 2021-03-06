@section('title')
Danh sách đơn hàng
@stop

@extends('layouts.back-end.master')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên sách</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành giá</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($detail as $order)
    <tr>
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->name }}</td>
      <td>{{ $order->quantity }}</td>
      <td>{{ $order->price }} đ</td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <form action="">
        <label for="status">Trạng thái đơn hàng:</label>
        <select name="status" class="custom-select">
            <option value ="1"selected>Đơn Hàng Đang Được Xử Lý</option>
            <option value="1">Đơn Hàng Đã Được Giao</option>
        </select>
    </form>
  </tfoot>
</table>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection