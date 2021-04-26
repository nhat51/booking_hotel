@extends('front.layout.master')

@section('body')
    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>Hotels Edit</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.hotels.index') }}">Hotels Management</a>
                        </li>
                        <li class="breadcrumb-item active">Hotels Edit</li>
                    </ol>
                    <!-- breadcrumb end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Users page ================ -->
    <div class="pt-70 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Hotel {{ $hotel->name }}</div>

                        <div class="card-body">
                            <form action="{{ route('admin.hotels.update', $hotel) }}" method="POST">
                                @csrf
                                {{method_field('PUT')}}
                                {{--                                hotel name input--}}
                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-8">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ $hotel->name }}" required autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                {{--                                hotel name input end--}}
                                {{--                                destination input--}}
                                <div class="form-group row">
                                    <label for="destination" class="col-md-2 col-form-label">Destination</label>
                                    <div class="col-md-8">
                                        <select name="destination" id="destination" class="form-control" required
                                                autofocus>
                                            @foreach($destinations as  $destination)
                                                <option value="{{ $destination->id }}"
                                                        @if(($hotel->destination_id) == ($destination->id)) selected @endif >{{ $destination->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--                                destination input end--}}
                                {{--                                address input--}}
                                <div class="form-group row">
                                    <label for="address" class="col-md-2 col-form-label">Address</label>
                                    <div class="col-md-8">
                                        <input id="address" type="text"
                                               class="form-control @error('address') is-invalid @enderror"
                                               name="address"
                                               value="{{ $hotel->address }}" required autofocus>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                {{--                                addresss input end--}}
                                {{--                                district input--}}
                                <div class="form-group row">
                                    <label for="district" class="col-md-2 col-form-label">District</label>
                                    <div class="col-md-8">
                                        <input id="district" type="text"
                                               class="form-control @error('district') is-invalid @enderror"
                                               name="district"
                                               value="{{ $hotel->district }}" required autofocus>

                                        @error('district')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                {{--                                district input end--}}
                                {{--                                city input--}}
                                <div class="form-group row">
                                    <label for="city" class="col-md-2 col-form-label">City</label>
                                    <div class="col-md-8">
                                        <input id="city" type="text"
                                               class="form-control @error('city') is-invalid @enderror" name="city"
                                               value="{{ $hotel->city }}" required autofocus>

                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                {{--                                city input end--}}
                                {{--                                star ranking--}}
                                <div class="form-group row">
                                    <label for="star_ranking" class="col-md-2 col-form-label">Ranking</label>
                                    <div class="col-md-8">
                                        <div class="personal-rating">
                                            <div class="rate">
                                                @for($i=5; $i>=1; $i--)
                                                    <input type="radio" id="star{{$i}}" name="star_ranking"
                                                           value="{{$i}}"
                                                           @if(($hotel->star_ranking) == ($i)) checked @endif />
                                                    <label for="star{{$i}}" title="text">{{$i}} stars</label>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--                                star ranking end--}}
                                {{--                                amenities--}}
                                <div class="form-group row">
                                    <p class="col-md-2 col-form-label">Amenities</p>
                                    <div class="form-check col-md-8">
                                        @foreach($amenities as $amenity)
                                            <div class="col-md-6">
                                            <input class="form-check-input " type="checkbox" value="" id="amenities{{$amenity->id}}"
                                                   name="amenities{{$amenity->id}}"
                                            @if($hotel->id == $amenity->hotel_id)checked
                                                @endif>
                                            <label class="form-check-label" for="amenities{{$amenity->id}}">
                                                {{ $amenity->amenities_name }}
                                            </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    {{--                                    --}}
                                    {{--                                        <p >{{$amenities->name}}</p>--}}
                                    {{--                                        <input type="checkbox" name="amenities" id="amenities">--}}

                                </div>
                                {{--                                amenities end--}}
                                {{--                                description--}}
                                <div class="form-group row">
                                    <label for="description" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="description" id="description">{{$hotel->description}}</textarea>
                                    </div>
                                </div>
                                {{--                                description end--}}

                                <button type="submit" class="btn-style-1 w-100">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Users page end ================ -->
@endsection
