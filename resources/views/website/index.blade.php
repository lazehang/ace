@extends('website.layout')
@section('content')
    @include('website.partials.navbar')

    <div class="banner">
      <div class="overlay"></div>
      <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 my-3">
                    <h2>FC ACE</h2>
                    <p>We are supplier of Construction Vibrator, Construction Rammer, Concrete Mixer, Mini Lift, Steel Bar Cutter, Material Handling Equipment, Lab Testing Equipment and others.</p>
                    <a href="#" class="btn btn-primary">Our Products</a>
                </div>
                <div class="col-md-4 my-3">
                    <div class="news">
                        
                    </div>
                    <div class="news">
                        
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <section class="news-section my-5">
        <div class="container">
            <div class="mb-3">
                <h2>Latest News</h2>
            </div>

            <div class="row">
                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="../../images/blue.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">19- JAN- 2019</span>
                                <span class="author">Jamie Ashbrook</span>
                            </div>
                            <h4><a href="blog-single.html">Why Lead Generation Is Key For Business Growth.</a></h4>
                            <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                            <div class="link-box"><a href="blog-single.html"><span class="fa fa-angle-right"></span>Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="../../images/blue.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">19- JAN- 2019</span>
                                <span class="author">Jamie Ashbrook</span>
                            </div>
                            <h4><a href="blog-single.html">How To Increase In-App Purchases In 2019.</a></h4>
                            <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                            <div class="link-box"><a href="blog-single.html"><span class="fa fa-angle-right"></span>Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News block --> 
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-single.html"><img src="../../images/blue.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="info-box">
                                <span class="date">19- JAN- 2019</span>
                                <span class="author">Jamie Ashbrook</span>
                            </div>
                            <h4><a href="blog-single.html">Voxburner Launches Youth Trends Report 2018.</a></h4>
                            <div class="text">Te probo omnis clita mea. In suas singulis consectetuer sed, vim fugit homero labores </div>
                            <div class="link-box"><a href="blog-single.html"><span class="fa fa-angle-right"></span>Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsor-section py-3">
        <!-- <span class="float-text">Our Sponsor</span> -->
        <div class="container">
            <div class="sec-title light my-5">
                <h2>Our Sponsors</h2>
            </div>

            <div class="sponsors-area">
                <div class="client-logo">
                    <figure class="image"><a href="#"><img src="../../images/jsports.png" alt=""></a></figure>
                </div>
                <div class="client-logo">
                    <figure class="image"><a href="#"><img src="../../images/Konami.png" alt=""></a></figure>
                </div>
                <div class="client-logo">
                    <figure class="image"><a href="#"><img src="../../images/toyobo.png" alt=""></a></figure>
                </div>
                <div class="client-logo">
                    <figure class="image"><a href="#"><img src="../../images/GoalNepalLogo.png" alt=""></a></figure>
                </div>
                <!-- <div class="client-logo">
                    <figure class="image"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                </div>
                <div class="client-logo">
                    <figure class="image"><a href="#"><img src="images/clients/6.png" alt=""></a></figure>
                </div>
                <div class="client-logo">
                    <figure class="image"><a href="#"><img src="images/clients/7.png" alt=""></a></figure>
                </div> -->
            </div>

            <div class="btn-box">
                <a href="#" class="theme-btn btn-style-four">Become a sponsor</a>
            </div>
        </div>
    </section>
@endsection