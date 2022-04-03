@extends("website.layout._main-layout")
@section("content")
<!--============= Banner Section Starts Here =============-->
<section class="banner-section-2 bg_img" data-background="{{asset_website("images/banner/banner-bg-2.png")}}">
    <div class="container">
        <div class="row align-items-center justify-content-between align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner-content cl-white">
                    <h5 class="cate">Enjoy Exclusive</h5>
                    <h1 class="title"><span class="d-xl-block">Hot Deal</span> For You</h1>
                    <p>
                        We’re constantly bringing new properties market so keep visiting our website that you don’t miss out on the next opportunity.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 d-none d-lg-block">
                <div class="banner-thumb">
                    <img src="{{asset_website("images/banner/banner-2.png")}}" alt="banner">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape-2 d-none d-lg-block">
        <img src="{{asset_website("/css/img/banner-shape-2.png")}}" alt="css">
    </div>
</section>
<!--============= Banner Section Ends Here =============-->


<!--============= Hightlight Slider Section Starts Here =============-->
<div class="browse-slider-section mt--140">
    <div class="container">
        <div class="section-header-2 mb-4">
            <div class="left">
                <h6 class="title cl-white cl-lg-black pl-0">Browse the highlights</h6>
            </div>
            <div class="slider-nav">
                <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
        <div class="m--15">
            <div class="browse-slider owl-theme owl-carousel">
                @foreach(\App\Entities\Category::get() as $category)
                    <a href="#0" class="browse-item">
                        <img src="{{$category->getFirstMediaUrl('category')}}" alt="auction">
                        <span class="info">{{$category->name}}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!--============= Hightlight Slider Section Ends Here =============-->

<x-website.auction.popular-auctions :class="'feature-auction-section padding-bottom padding-top bg_img'"/>

<!--============= Upcoming Auction Section Starts Here =============-->

<section class="upcoming-auction padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Upcoming Auctions</h2>
            <p>You are welcome to attend and join in the action at any of our upcoming auctions.</p>
        </div>
    </div>
    <div class="filter-wrapper">
        <div class="container">
            <ul class="filter">
                <li class="active">
                    <span><i class="flaticon-right-arrow"></i>All</span>
                </li>
                <li data-check=".live">
                    <span><i class="flaticon-auction"></i>Running Auction</span>
                </li>
                <li data-check=".time">
                    <span><i class="flaticon-time"></i>Future Auction</span>
                </li>
            </ul>
        </div>
    </div>
    <livewire:website.auction.index.horiz-auctions />
</section>
<!--============= Upcoming Auction Section Ends Here =============-->


<!--============= How Section Starts Here =============-->
<section class="how-video-section pos-rel">
    <div class="popular-bg bg_img" data-background="{{asset_website("assets/images/auction/popular/popular-bg.png")}}"></div>
    <div class="how-video-shape bg_img d-none d-md-block" data-background="{{asset_website("assets/css/img/how-video.png")}}"></div>
    <div class="container">
        <div class="how-video-wrapper">
            <div class="how-video-area">
                <a href="https://www.youtube.com/watch?v=Mj3QejzYZ70" class="popup">
                    <h5 class="title">Watch Our Videos</h5>
                    <div class="video-button">
                        <i class="flaticon-right-arrow-1"></i>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="how-wrapper section-bg shadow-style">
            <div class="section-header text-lg-left">
                <h2 class="title">How it works</h2>
                <p>Easy 3 steps to win</p>
            </div>
            <div class="row justify-content-center mb--40">
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{asset_website("images/how/how1.png")}}" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Sign Up</h4>
                            <p>No Credit Card Required</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{asset_website("images/how/how2.png")}}" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Bid</h4>
                            <p>Bidding is free Only pay if you win</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{asset_website("images/how/how3.png")}}" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Win</h4>
                            <p>Fun - Excitement - Great deals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= How Section Ends Here =============-->


<!--============= Call In Section Starts Here =============-->
<section class="call-in-section padding-top">
    <div class="container">
        <div class="call-wrapper cl-white bg_img" data-background="{{asset_website("assets/images/call-in/call-bg.png")}}">
            <div class="section-header">
                <h3 class="title">Register for Free & Start Bidding Now!</h3>
                <p>From cars to diamonds to iPhones, we have it all.</p>
            </div>
            <a href="sign-up.html" class="custom-button white">Register</a>
        </div>
    </div>
</section>
<!--============= Call In Section Ends Here =============-->


<!--============= Client Section Starts Here =============-->
<section class="client-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Don’t just take our word for it!</h2>
            <p>Our hard work is paying off. Great reviews from amazing customers.</p>
        </div>
        <div class="m--15">
            <div class="client-slider owl-theme owl-carousel">
                <div class="client-item">
                    <div class="client-content">
                        <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="{{asset_website("images/client/client01.png")}}" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="{{asset_website("images/client/client02.png")}}" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="{{asset_website("images/client/client03.png")}}" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Tom Powell</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Client Section Ends Here =============-->
@endsection
