@extends('front.layout.master')
@section('title','Blog Single')
@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Blog Single</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blog Single</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Blog single page ================ -->
<div class="blog-single-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- blog box -->
        <div class="blog-box p-0">
          <div class="blog_img mb-20"><img src="front/img/blog/{{ $blogs->image }}" alt=""></div>
          <div class="blog-des">
            <h6 class="blog_date font-weight-normal text-muted"><span>{{ $blogs->category }}</span> {{ date('M d, Y', strtotime($blogs->created_at)) }}</h6>
            <h5 class="mt-10 mb-6"><a href="{{ route('blog.blog-detail', $blogs) }}" class="text-dark">{{ $blogs->title }}</a></h5>
            <p class="text-muted">{!! $blogs->content !!}</p>
          </div>
        </div>
        <!-- blog box end -->
        <!-- tags share -->
        <div class="tags-share mt-30 pb-15 d-inline-block w-100">
          <div class="share d-flex float-lg-right pt-15"> <span>Share :</span>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/dialog/share?"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- tags share end -->
        <!-- comments area -->
        <div class="comments-area mt-50">
          <!-- title -->
          <div class="blog-single-title">
            <h4>Read Comments</h4>
          </div>
          <!-- title end -->
          <!-- comment box -->
            @foreach($blogs->blog_comments as $blog_comment)
          <div class="comment-box mb-30">
            <div class="comment">
              <div class="author-thumb"><img src="front/img/user/{{ $hotelComment->user->avatar ?? 'default-avatar.jpg' }}" alt=""></div>
              <div class="comment-inner">
                <div class="comment-info clearfix">{{ $blog_comment->user->name }} – {{ date('M d, Y', strtotime($blog_comment->created_at)) }}:</div>
                <div class="rating">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $blog_comment->rating)
                            <i class="fa fa-star"></i>
                        @else
                            <i class="far fa-star"></i>
                        @endif
                    @endfor
                </div>
                <div class="text">{{ $blog_comment->messages }}</div>
              </div>
            </div>
          </div>
            @endforeach
          <!-- comment box end -->
        </div>
        <!-- comments area end -->
        <!-- post comments -->
        <div class="post-comments mt-50 mb-30">
          <!-- title -->
          <div class="blog-single-title">
            <h4>Post Comments As {{ \Illuminate\Support\Facades\Auth::user()->name }}</h4>
          </div>
          <!-- title end -->
          <!-- post comment form -->
                <div class="post-comment-form">
                    <form class="form-style-2" action="" method="POST" >
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blogs->id }}">
                        <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea class="form-control mt-2" rows="5" placeholder="Messages" name="messages" required></textarea>
                                <div class="personal-rating mt-5">
                                    <h6>Your Rating</h6>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rating" value="5" checked/>
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rating" value="4"/>
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rating" value="3"/>
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rating" value="2"/>
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rating" value="1"/>
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-style-1 text-uppercase">Post Comment</button>
                    </form>
                </div>
          <!-- post comment form end -->
        </div>
        <!-- post comments end -->
      </div>
      <div class="col-lg-4">
        <!-- aside -->
        <aside>
          <!-- search form -->
          <form class="search-form mb-50">
            <input type="text" class="form-control" placeholder="Search" value="">
            <button class="search-submit"><i class="fas fa-search"></i></button>
          </form>
          <!-- search form end -->
          <!-- widget -->
          <div class="widget mb-50">
            <!-- widget title -->
            <h3 class="widget-title">Categories</h3>
            <!-- widget title end -->
            <!-- categories -->
            <ul class="blog-categorie">
              <li><a href="#"><i class="far fa-dot-circle"></i> Business</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Traveling</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Developement</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Motion Designer</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Content Writing</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Web Developement</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Business Strategy</a></li>
              <li><a href="#"><i class="far fa-dot-circle"></i> Risk Management</a></li>
            </ul>
            <!-- categories end -->
          </div>
          <!-- widget end -->
          <!-- widget -->
          <div class="widget mb-50">
            <!-- widget title -->
            <h3 class="widget-title">Recent Post</h3>
            <!-- widget title end -->
            <!-- recent post -->
            <div class="blog-recent-post">
              @include('blog.components.recent-post')
            </div>
            <!-- recent post end -->
          </div>
          <!-- widget end -->
        </aside>
        <!-- aside end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Blog single page end ================ -->
@endsection
