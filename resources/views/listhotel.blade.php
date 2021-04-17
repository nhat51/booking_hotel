
@extends('front.layout.master')

@section('title', 'List Hotel')

@section('body')
<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Searched Best Result</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Hotel Result</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Listing page ================ -->
<div class="listing-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <aside>
          <!-- sidebar -->
          <div class="desktop-filter-sidebar">
            <!-- filter widget -->

            <div class="filter-widget mb-20">
              <div class="accordion filter-accordion" id="filter-widget-accordion4-d">
                <div class="card">
                  <div class="card-header" id="headingOne4-d"> <a class="btn btn-link w-100 text-left" href="#" data-toggle="collapse" data-target="#collapseOne4-m" aria-expanded="true" aria-controls="collapseOne4-m">
                    <!-- title widget -->
                    <div class="filter-title-widget">
                      <h3>Hotels <i class="fas fa-plus-square float-right"></i> <i class="fas fa-minus-square float-right"></i></h3>
                    </div>
                    <!-- title widget end -->
                    </a> </div>
                  <div id="collapseOne4-m" class="collapse show mt-10" aria-labelledby="headingOne4-d" data-parent="#filter-widget-accordion4-d">
                    <div class="card-body">
                      <ul class="list-inline select-all mb-10">
                        <li class="list-inline-item">{{ count($hotels) }} Hotels on screen</li>
                      </ul>
                      <div class="table-responsive">
                        <table class="table table-bordered bg-gray w-100 border-0">
                          <tr>
                            <td>Check In</td>
                            <td>{{ date('M d, y'),strtotime($booking) }}</td>
                          </tr>
                          <tr>
                            <td>Check Out</td>
                            <td>{{ date('M d, y'),strtotime($booking)}}</td>
                          </tr>
                          <tr>
                            <td>Room 1</td>
                            <td>1  Adult(s)</td>
                          </tr>
                        </table>
                      </div>
                      <button type="button" class="btn-style-1" data-toggle="modal" data-target="#modify-search-Modal"><i class="fas fa-search"></i> Modify Search </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- filter widget end -->
                <!-- filter widget -->
              <form action="{{ request()->segment(2) == '' ? 'hotel' : '' }}">
                <div class="filter-widget mb-20">
                  <div class="accordion filter-accordion" id="filter-widget-accordion-d">
                    <div class="card">
                      <div class="card-header" id="headingOne-d"> <a class="btn btn-link w-100 text-left" href="#" data-toggle="collapse" data-target="#collapseOne-m" aria-expanded="true" aria-controls="collapseOne-m">
                        <!-- title widget -->
                        <div class="filter-title-widget">
                          <h3>Price <i class="fas fa-plus-square float-right"></i> <i class="fas fa-minus-square float-right"></i></h3>
                        </div>
                        <!-- title widget end -->
                        </a> </div>
                      <div id="collapseOne-m" class="collapse show mt-10" aria-labelledby="headingOne-d" data-parent="#filter-widget-accordion-d">
                        <div class="card-body">
                            <select class="form-control" >
                                <option {{ request('sortby') == 'range1' ? 'selected' : '' }}>1.000.000<sup>₫</sup> - 2.000.000<sup>₫</sup></option>
                                <option {{ request('sortby') == 'range2' ? 'selected' : '' }}>2.000.000<sup>₫</sup> - 3.000.000<sup>₫</sup></option>
                                <option {{ request('sortby') == 'range3' ? 'selected' : '' }}>3.000.000<sup>₫</sup> - 4.000.000<sup>₫</sup></option>
                                <option {{ request('sortby') == 'range4' ? 'selected' : '' }}>4.000.000<sup>₫</sup> - 5.000.000<sup>₫</sup></option>
                                <option {{ request('sortby') == 'range5' ? 'selected' : '' }}>5.000.000<sup>₫</sup> - 6.000.000<sup>₫</sup></option>
                                <option {{ request('sortby') == 'range6' ? 'selected' : '' }}> >6.000.000<sup>₫</sup> </option>
                            </select>
                        </div>
                          <div class="mt-1">
                              <button type="submit" class="btn-style-1">Filter</button>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- filter widget end -->
                <!-- filter widget -->
                <div class="filter-widget mb-20">
                  <div class="accordion filter-accordion" id="filter-widget-accordion2-d">
                    <div class="card">
                      <div class="card-header" id="headingOne2-d"> <a class="btn btn-link w-100 text-left" href="#" data-toggle="collapse" data-target="#collapseOne2-m" aria-expanded="true" aria-controls="collapseOne2-m">
                        <!-- title widget -->
                        <div class="filter-title-widget">
                          <h3>Star Rating <i class="fas fa-plus-square float-right"></i> <i class="fas fa-minus-square float-right"></i></h3>
                        </div>
                        <!-- title widget end -->
                        </a> </div>
                      <div id="collapseOne2-m" class="collapse show mt-10" aria-labelledby="headingOne2-d" data-parent="#filter-widget-accordion2-d">
                        <div class="card-body">
                          <div class="filter-checkbox-widget">
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="star_rank_5" {{ request('ranking') == '5' ? 'checked' : '' }} name="ranking" value="5" onchange="this.form.submit();">
                                    <label class="form-check-label {{ request('ranking') == '5' ? 'active' : '' }}" for="star_rank_5"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <small>(5)</small> </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="star_rank_4" {{ request('ranking') == '4' ? 'checked' : '' }} name="ranking" value="4" onchange="this.form.submit();">
                                    <label class="form-check-label {{ request('ranking') == '4' ? 'active' : '' }}" for="star_rank_4"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> <small>(4)</small> </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="star_rank_3" {{ request('ranking') == '3' ? 'checked' : '' }} name="ranking" value="3" onchange="this.form.submit();">
                                    <label class="form-check-label {{ request('ranking') == '3' ? 'active' : '' }}" for="star_rank_3"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <small>(3)</small> </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="star_rank_2" {{ request('ranking') == '2' ? 'checked' : '' }} name="ranking" value="2" onchange="this.form.submit();">
                                    <label class="form-check-label {{ request('ranking') == '2' ? 'active' : '' }}" for="star_rank_2"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <small>(2)</small> </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="star_rank_1" {{ request('ranking') == '1' ? 'checked' : '' }} name="ranking" value="1" onchange="this.form.submit();">
                                    <label class="form-check-label {{ request('ranking') == '1' ? 'active' : '' }}" for="star_rank_1"> <i class="fas fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <small>(1)</small> </label>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- filter widget end -->
                <!-- filter widget -->
                <div class="filter-widget mb-20">
                  <div class="accordion filter-accordion" id="filter-widget-accordion3-d">
                    <div class="card">
                      <div class="card-header" id="headingOne3-d"> <a class="btn btn-link w-100 text-left" href="#" data-toggle="collapse" data-target="#collapseOne3-m" aria-expanded="true" aria-controls="collapseOne3-m">
                        <!-- title widget -->
                        <div class="filter-title-widget">
                          <h3>Destination <i class="fas fa-plus-square float-right"></i> <i class="fas fa-minus-square float-right"></i></h3>
                        </div>
                        <!-- title widget end -->
                        </a> </div>
                      <div id="collapseOne3-m" class="collapse show mt-10" aria-labelledby="headingOne3-d">
                        <div class="card-body">
                          <div class="filter-checkbox-widget">
                              @foreach($destinations as $district)
                                  <div class="bc-item">
                                      <label for="bc-{{ $district->id }}">
                                          <input type="checkbox"
                                                 {{ (request("destinations")[$district->id]?? '') == 'on' ? 'checked' : '' }}
                                                 id="bc-{{ $district->id }}"
                                                 name="destinations[{{ $district->id }}]" onchange="this.form.submit();">
                                          {{ $district->name }}
                                          <span class="checkmark"></span>
                                      </label>
                                  </div>
                              @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- filter widget end -->
              </form>
            <!-- help us -->
            <div class="help-us mb-30">
              <h3>How can we help you?</h3>
              <p>Lorem ipsum dolor sit ametdf consectetur adipiscing elitdgsh ametdf consectetur piscing.</p>
              <a class="view-detail-btn" href="#"><i class="fas fa-phone-alt"></i> Contact Us</a> </div>
            <!-- help us end -->
          </div>
          <!-- sidebar end -->
        </aside>
      </div>
      <div class="col-lg-9">
        <!-- hotel results list -->
        <div class="hotel-results-list">
            @foreach($hotels as $hotel)
              <!-- list box -->
              <div class="list-box mb-30">
                <div class="owl-carousel list-box-carousel">
                  <figure class="item"> <img src="front/img/hotel-image/{{ $hotel->hotel_images[0]->path }}" alt="img description"> </figure>
                </div>
                <div class="list-box-content">
                  <div class="list-box-title">
                    <h3> {{ $hotel->name }} <span> {{ $hotel->rooms[0]->price }} <em>/ night</em></span></h3>
                    <address>
                    <i class="fas fa-map-marker-alt"></i> {{ $hotel->description }}
                    </address>
                  </div>
                  <div class="list-box-rating"> <span class="at-stars">
                         @for($i=1; $i<=5; $i++)
                              @if($i<=$hotel->star_ranking)
                                  <i class=" fas  fa-star"></i>
                              @else
                                  <i class=" far  fa-star"></i>
                              @endif
                          @endfor
                      </span> <em>{{ count($hotel->hotel_comments)}} review</em> </div>
                  <ul class="hotel-featured">
                      @foreach($hotel->hotel_amenities as $name)
                        <li><span><i class="fas fa-car"></i> {{ $name->amenities_name }} </span></li>
                      @endforeach
                  </ul>
                  <div class="btn-wrapper mt-20 d-inline-block w-100"> <a class="view-detail-btn" href="./hotel/{{ $hotel->id }}">View Details</a> <a class="book-now-btn ml-6" href="./traveler">Book Now</a> </div>
                </div>
              </div>
              <!-- list box end -->
            @endforeach
        </div>
        <!-- hotel results list end -->
        <!-- pagination -->
        <ul class="pagination pagination-box mb-30">
          <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
          <li class="page-item active"><a class="page-link" href="">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
        </ul>
        <!-- pagination end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Listing page end ================ -->
@endsection
