@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <h1>All genres</h1>
        <div class="card">
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            <div class="row">
              @foreach ($genres as $genre )
                <div class="col-md-4 py-4 px-4">
                  <a href="/genre/{{ $genre->id }}">
                    <div class="card bg-dark text-white">
                      <img src="https://source.unsplash.com/500x500?" class="card-img" alt="{{ $genre->name }}">
                      <div class="card-img-overlay d-flex align-items-center p-0  ">
                        <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $genre->name }}</h5>
                      </div>
                    </div>
                  </a>
                </div>
              @endforeach
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
