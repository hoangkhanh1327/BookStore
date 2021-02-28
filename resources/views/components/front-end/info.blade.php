@section('title')
Thông tin tài khoản
@stop

@extends('layouts.front-end.master')

@section('content')
<div class="container">
    <div class="row">
        <p class="h3 text-center mx-auto">Thông tin tài khoản</p>
    </div>
    <div class="row">
        <form action="{{ route('update_info') }}" class="form w-50 mx-auto" >
            <div class="form-group">
                <label for="name">Tên khách hàng</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Địa chỉ email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone_number }}">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Quay trở lại</a>
        </form>
    </div>
</div>
@endsection