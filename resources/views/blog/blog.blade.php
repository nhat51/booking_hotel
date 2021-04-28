@extends('front.layout.master')
@section('title', 'Blog')
@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Blog</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Blog page ================ -->
<div class="blog-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
            @foreach($blogs as $blog)
          @include('blog.components.blog-thumb')
            @endforeach
        </div>
      </div>
      <div class="col-lg-4">
        <!-- aside -->
        <aside>
          <!-- search form -->
          <form class="search-form mb-50">
            <input type="text" class="form-control" placeholder="Search" value="{{ request('search') }}">
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
<!-- ================ Blog page end ================ -->
@endsection

