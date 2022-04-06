@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-dark text-white">
                                    <img src="https://source.unsplash.com/300x300?" class="card-img" alt="{{ $book->title }}">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h1>{{ $book->title }}</h1>
                                <h3>{{ $book->authors->name }}</h3>
                                <h5>{{ $book->genres->name }}</h5>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5">
                            <article>{!! $page !!}</article>
                        </div>

                        <div class="row justify-content-center mt-5">
                            <div class="col-md-4">
                                
                                @if (request()->page == 0)
                                    <a href="/books/{{ $book->id }}?page={{ request()->page + 1 }}" class="btn btn-dark">Next page</a>
                                @elseif ($book->contents->count() - 1 == request()->page)
                                    <a href="/books/{{ $book->id }}?page={{ request()->page - 1 }}" class="btn btn-dark">Previous page</a>
                                    <form action="" method="post" class="d-inline">
                                        @csrf
                                        @method('patch')
                                        <a href="/home" class="btn btn-dark">Finished</a>
                                    </form>
                                    
                                @else
                                    <a href="/books/{{ $book->id }}?page={{ request()->page - 1 }}" class="btn btn-dark">Previous page</a>
                                    <a href="/books/{{ $book->id }}?page={{ request()->page + 1 }}" class="btn btn-dark">Next page</a>
                                @endif

                                <a href="#" class="btn btn-secondary">Mark this page</a>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
