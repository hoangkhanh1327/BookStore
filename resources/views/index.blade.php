@section('title')
Trang chủ
@endsection

@extends('layouts.front-end.master')

@section('content')
<div class="container">
    <!-- Slides and Menu -->
    <section class="row">
        <!-- Menu -->
        <div class="col-sm-3 pt-2">
            @include('components.categories')
        </div>
        <!-- Slides Ads -->
        <div class="col-sm-9 pt-2">
            @include('components.slides')
        </div>
    </section>
    <!-- View Books -->
    @foreach ($categories as $key => $childCate)
    <section class="row mt-4">
        @include('layouts.front-end.book_list')
    </section>
    @endforeach

</div>
@endsection