@section('title')
Danh sách sách
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
      <th scope="col">Tác giả</th>
      <th scope="col">Thể loại</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá tiền</th>
      <th scope="col">Khuyến mãi</th>
      <th scope="col">Được khuyến khích</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <th scope="row">{{ $book->id }}</th>
      <td>{{ $book->name }}</td>
      <td>{{ $book->author_name }}</td>
      <td>{{ $book->category_name }}</td>
      <td>{{ $book->quantity }}</td>
      <td>{{ $book->price }} đ</td>
      <td>{{ $book->saleoff }} %</td>
      <td>@php echo ($book->is_suggested == 1 ? "Có" : "Không") @endphp</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection