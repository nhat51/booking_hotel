@extends('front.layout.master')

@section('title', 'Home')

@section('body')

<!-- ================ Slider area ================ -->
<div class="slider">
  <!-- search area -->
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12 col-12 offset-xl-0 offset-lg-3 offset-sm-0">
          <div class="center-search">
            <h1 class="text-white">Enjoy Your Holiday</h1>
            <p class="text-white">Search and Book Hotel</p>
            <form class="form-style-1" action="./search" method="post">
                {{csrf_field()}}
              <div class="form-group">
                  <input type="hidden" name="available" value="1">
                <input name="search" type="text" class="form-control" placeholder="Search City">
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <input name="checkin" type="text" class="form-control" id="check-in" placeholder="Check In">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="form-group">
                    <input name="checkout" type="text" class="form-control" id="check-out" placeholder="Check Out">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn-style-1 w-100">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- search area end -->
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <!-- slider item -->
      <div class="carousel-item active"> <img src="front/img/slider/slider-1.jpg" alt="" class="img-fluid"> </div>
      <!-- slider item end -->
      <!-- slider item -->
      <div class="carousel-item"> <img src="front/img/slider/slider-2.jpg" alt="" class="img-fluid"> </div>
      <!-- slider item end -->
      <!-- slider item -->
      <div class="carousel-item"> <img src="front/img/slider/slider-3.jpg" alt="" class="img-fluid"> </div>
      <!-- slider item end -->
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <i class="fas fa-caret-left"></i></a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <i class="fas fa-caret-right"></i></a> </div>
</div>
<!-- ================ Slider area end ================ -->

<!-- ================ About area ================ -->
<div class="about-area pt-70 pb-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-30">
        <!-- about text -->
        <div class="about-col">
          <h6>About us</h6>
          <h2>We <span>provide solutions</span> to grow your business</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
          <a class=" btn-style-1" href="#" role="button">Explore More <i class="fas fa-long-arrow-alt-right pl-6"></i></a> </div>
        <!-- about text end -->
      </div>
      <div class="col-lg-6 mb-30">
        <!-- about video -->
        <div class="about-video-img-box position-relative rounded"> <img src="front/img/about-us/about-video-img-1.jpg" alt="" class="img-fluid rounded">
          <div class="hoverlay d-flex flex-row align-items-center justify-content-center"> <a class="venobox d-inline" data-gall="gall-video" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=668nUCeBHyY&amp;t=28s"><i class="fab fa-google-play"></i></a> </div>
        </div>
        <!-- about video end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ About area end ================ -->

<!-- ================ Most popular hotel ================ -->
<div class="most-popular-hotel pt-70 pb-70 position-relative">
  <div class="bg-style-1"></div>
  <div class="container">
    <!-- section title -->
    <div class="section-title text-center">
      <h2>Most Popular Hotel</h2>
      <span class="dashed-border"></span> </div>
    <!-- section title -->
  </div>
  <div class="container-fluid">
    <!-- popular hotel carousel -->
    <div class="popular-hotel-carousel owl-carousel owl-theme">

        @foreach($popularhotels as $popularhotel)
        <div class="item">
        <!-- popular hotel box -->
        <div class="popular-hotel-box">
          <div class="imege mb-10"><img src="front/img/popular-hotel/{{$popularhotel->hotel_images[0]->path}}" alt="">
            <div class="black-bg">
                <a href="#"><i class="fas fa-map-marker-alt"></i> {{$popularhotel->destinations->name}}</a>
            </div>
          </div>
          <div class="rating">

              @for($i=1; $i<=5; $i++)
                  @if($i<=$popularhotel->star_ranking)
                      <i class="fas fa-star"></i>
                  @else
                      <i class="far fa-star"></i>
                  @endif
              @endfor

          </div>
          <h4><a href="./hotel/{{ $popularhotel->id }}">{{$popularhotel->name}}</a></h4>
          <div class="price">From {{number_format($popularhotel->rooms[0]->price)}} <sup>₫</sup> / <span>Per night</span></div>
        </div>
        <!-- popular hotel box end -->
      </div>
        @endforeach

    </div>
    <!-- popular hotel carousel end -->
  </div>
</div>
<!-- ================ Most popular hotel end ================ -->

<!-- ================ Popular destinations ================ -->
<div class="popular-destinations pt-70 pb-40 position-relative">
  <div class="bg-style-1"></div>
  <div class="container">
    <!-- section title -->
    <div class="section-title text-center">
      <h2>Most Popular Destinations</h2>
      <span class="dashed-border"></span> </div>
    <!-- section title -->
    <div class="row">
        @foreach($populardestinations as $populardestination)
      <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
        <!-- popular destination box -->
        <div class="popular-destination-box">
          <div class="img-holder-overlay">
            <div class="img-holder"><img src="front/img/popular-destination/{{$populardestination->image_path}}" alt=""></div>
              <div class="overlay"><a href="./destiantion/{{ $populardestination->id }}"><i class="fas fa-share"></i></a></div>
          </div>
          <div class="title">
            <h3><a href="./destiantion/{{ $populardestination->id }}">{{$populardestination->name}}</a></h3>
          </div>
        </div>
        <!-- popular destination box end -->
      </div>
        @endforeach
    </div>
  </div>
</div>
<!-- ================ Popular destinations end ================ -->

<!-- ================ Testimonials ================ -->
<!-- ================ Testimonials end ================ -->

<!-- ================ Blog area ================ -->
<div class="blog-area pt-70 pb-40 position-relative">
  <div class="bg-style-1"></div>
  <div class="container">
    <!-- section title -->
    <div class="section-title text-center">
      <h2>Latest News</h2>
      <span class="dashed-border"></span> </div>
    <!-- section title -->
    <div class="row">
        @foreach($recentPost as $recent)
      <div class="col-lg-4 col-md-6 mb-30">
        <!-- blog box -->
        <div class="blog-box shadow">
          <div class="blog_img mb-20"><img src="front/img/blog/{{ $recent->image }}" alt=""></div>
          <div class="blog-des">
            <h6 class="blog_date font-weight-normal text-muted"><span>{{ $recent->category }}</span> {{ date('M d/ Y', strtotime($recent->created_at)) }}</h6>
            <h5 class="mt-10 mb-6"><a href="{{ route('blog.blog-detail', $recent) }}" class="text-dark">{{ \Illuminate\Support\Str::limit($recent->title, 50) }}</a></h5>
            <p class="text-muted">{{ \Illuminate\Support\Str::limit($recent->content, 200) }}</p>
            <div class="read_more">
              <div class="blog_border"></div>
              <a href="{{ route('blog.blog-detail', $recent) }}" class="text-dark text-uppercase"> Read More</a> </div>
          </div>
        </div>
        <!-- blog box end -->
      </div>
        @endforeach
    </div>
  </div>
</div>
<!-- ================ Blog area end ================ -->

<!-- ================ How it works ================ -->
<div class="how-it-works pt-70 pb-40 position-relative">
  <div class="bg-style-1"></div>
  <div class="container">
    <!-- section title -->
    <div class="section-title text-center">
      <h2>How it Works</h2>
      <span class="dashed-border"></span> </div>
    <!-- section title -->
    <div class="row">
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- how it work box -->
        <div class="how-it-work-box text-center">
          <div class="icon mb-15"><img src="front/img/icon/1.png" alt=""></div>
          <h4 class="mb-10">Search Multiple Destinations</h4>
          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum.</p>
        </div>
        <!-- how it work box end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- how it work box -->
        <div class="how-it-work-box text-center">
          <div class="icon mb-15"><img src="front/img/icon/2.png" alt=""></div>
          <h4 class="mb-10">Find the Lowest Hotel Prices</h4>
          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum.</p>
        </div>
        <!-- how it work box end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- how it work box -->
        <div class="how-it-work-box text-center">
          <div class="icon mb-15"><img src="front/img/icon/3.png" alt=""></div>
          <h4 class="mb-10">Find the Right Hotel for You</h4>
          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum.</p>
        </div>
        <!-- how it work box end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ How it works end ================ -->

<!-- ================ Partner area ================ -->
<div class="partner-section pb-50">
  <div class="container">
    <div class="partner-carousel p-20 rounded bg-gray owl-carousel owl-theme">
      <div class="item">
        <!-- partner item -->
        <div class="partner-item"> <img src="front/img/partner/1.png" class="img-fluid bg-white" alt=""></div>
        <!-- partner item end -->
      </div>
      <div class="item">
        <!-- partner item -->
        <div class="partner-item"> <img src="front/img/partner/2.png" class="img-fluid bg-white" alt=""></div>
        <!-- partner item end -->
      </div>
      <div class="item">
        <!-- partner item -->
        <div class="partner-item"> <img src="front/img/partner/3.png" class="img-fluid bg-white" alt=""></div>
        <!-- partner item end -->
      </div>
      <div class="item">
        <!-- partner item -->
        <div class="partner-item"> <img src="front/img/partner/4.png" class="img-fluid bg-white" alt=""></div>
        <!-- partner item end -->
      </div>
      <div class="item">
        <!-- partner item -->
        <div class="partner-item"> <img src="front/img/partner/5.png" class="img-fluid bg-white" alt=""></div>
        <!-- partner item end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Partner area ================ -->
@endsection
