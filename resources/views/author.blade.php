@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <h1>{{ $authors->name }}</h1>
        <div class="card">
          <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                {{ session('status') }}
                </div>
            @endif
            
            <div class="row">
              @foreach ($books as $book )
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x500?" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $book->title }}</h5>
                      <a href="/authors/{{ $book->authors->id }}" class="link-dark"><p class="card-text">{{ $book->authors->name }}</p></a>
                      <a href="/genre/{{ $book->genres->id }}" class="link-dark"><p class="card-text"><i>{{ $book->genres->name }}</i></p></a>
                      <div class="row">
                        <div class="col-md-12 mt-3">
                          <a href="/books/{{ $book->id }}?page=0" class="btn btn-dark">Read this</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

              
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
