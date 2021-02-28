@section('title')
Tìm kiếm: "{{ $search}}""
@stop

@extends('layouts.front-end.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 p-0 border border-primary rounded mt-2">
            <p class="h4 text-center tag">Tìm kiếm cho từ khóa {{ $search }}. Có {{ $total }} kết quả</p>
        </div>
        <div class="card-group mt-2">
            @foreach ($result as $book)
            <div class="card mr-4">
                <img src="{{ $book->book_image }}" class="card-img-top mx-auto" style="max-height:300px; max-width:250px;" alt="...">
                <div class="card-body">
                    <a class="card-title font-weight-bold text-decoration-none text-wrap" href="{{ route('detail', $book->bookId) }}">{{ $book->name }}</a>
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
</div>
</div>
@endsection