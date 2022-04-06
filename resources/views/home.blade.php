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
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner" style="background: rgba(0, 0, 0, 0.1)">
                <div class="carousel-item active">
                  <img src="https://source.unsplash.com/500x400?test" class="d-block m-auto" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.7)">
                  <h5>Title book 1</h5>
                  <p>Author book 1</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/500x400?" class="d-block m-auto" alt="...">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.7)">
                  <h5>Title book 2</h5>
                  <p>Author book 2</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/500x400?" class="d-block m-auto" alt="...">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.7)">
                  <h5>Title book 3</h5>
                  <p>Author book 3</p>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <div class="row mt-5 px-4">
              <h2>Recently read</h2>
              @foreach ($books as $book)
                @if ($book->flag)
                  <div class="col-md-4 mt-3">
                    <div class="card" style="width: 18rem;">
                      <img src="https://source.unsplash.com/500x400?" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->authors->name }}</p>
                        <p class="card-text"><i>{{ $book->genres->name }}</i></p>
                        <a href="#" class="btn btn-dark">Continue Read</a>
                      </div>
                    </div>
                    <a href="#" class="btn btn-dark mt-3">More recently read</a>
                  </div>
                @else
                @endif
              @endforeach
              <div class="row">
                <div class="col-md-8">
                  You have no read a book yet.
                </div>
              </div>
              @if ($books->flag=false)
                <div class="row">
                  <div class="col-md-4">
                    <a href="#" class="btn btn-dark mt-3">More recently read</a>
                  </div>
                </div>  
              @else
              <div class="row">
                <div class="col-md-4">
                  <a href="book" class="btn btn-dark mt-3">Read now</a>
                </div>
              </div>
              @endif
            </div>

            <div class="row mt-3 px-4 py-5">
              <h2>Latest books</h2>
              @foreach ($books as $book)
                <div class="col-md-4 mt-3">
                  <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/250x250?" class="card-img-top" alt="{{ $book->title }}">
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
              <div class="row">
                <div class="col-md-2">
                  <a href="book" class="btn btn-dark mt-3">More books</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
