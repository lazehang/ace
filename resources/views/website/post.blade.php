@extends('website.layout')
@section('content')
    @include('website.partials.navbar')
    
    <!-- <div class="banner--news">
      <div class="overlay"></div> -->
        <!-- <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h1>News</h1>
                </div>
            <!-- </div> -->
        <!-- </div>
    </div> -->
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto mt-5">
                <div class="py-3">
                    <h1>{{ $news->title }}</h1>
                    <span>{{ $news->publishDate->format('d/m/Y') }}</span>
                </div>
                <img src="{{ $news->heroImageUrl }}" width="100%" />
                <p class="py-3">{{ Illuminate\Mail\Markdown::parse($news->body) }}</p>
            </div>
        </div>
    </div>
    

@endsection