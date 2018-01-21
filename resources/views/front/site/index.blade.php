@extends('layouts.site')
@section('content')
    <section id="index">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('assets/img/team.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Fc ACE</h3>
              <p>Nullam felis nunc, consequat sed pretium sed, rutrum eget sapien. Nam nisl quam, pharetra vel vehicula eu, suscipit at ligula. Phasellus vitae pellentesque lectus, nec scelerisque tortor. Pellentesque eu elementum arcu, a consequat nunc.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://i2.mirror.co.uk/incoming/article7515340.ece/ALTERNATES/s1227b/Chelsea-train-ahead-of-their-Champions-League-match-against-PSG.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>Nullam felis nunc, consequat sed pretium sed, rutrum eget sapien. Nam nisl quam, pharetra vel vehicula eu, suscipit at ligula. Phasellus vitae pellentesque lectus, nec scelerisque tortor. Pellentesque eu elementum arcu, a consequat nunc.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('assets/img/hongkong.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>Nullam felis nunc, consequat sed pretium sed, rutrum eget sapien. Nam nisl quam, pharetra vel vehicula eu, suscipit at ligula. Phasellus vitae pellentesque lectus, nec scelerisque tortor. Pellentesque eu elementum arcu, a consequat nunc.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>

  @include('front.site.team')
  @include('front.site.about')
  @include('front.site.gallery')
  @include('front.site.news')
  @include('front.site.contact')
  @include('front.site.sponsors')

@stop


  



  
