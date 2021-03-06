@extends('front.layout.master')

@section('title', 'Administrator')
@section('body')
    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>Hotels Management</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Hotels Management</li>
                    </ol>
                    <!-- breadcrumb end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Hotels page ================ -->
    <div class="pt-70 pb-70">
        <div class="container-fluid">
            @include('alerts.alerts')
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="list-group">
                        @can('manage-users')
                            <a href="{{route('admin.users.index')}}"
                               class="list-group-item list-group-item-action ">
                                <span class="fas fa-users"></span> User Management
                            </a>
                        @endcan
                        @can('manage-hotels')
                            <a href="{{ route('admin.hotels.index') }}" class="list-group-item list-group-item-action list-group-item-success active">
                                <span class="fas fa-hotel"></span> Hotel Management
                            </a>
                        @endcan
                        <a href="#" class="list-group-item list-group-item-action disabled"><span class="fas fa-splotch"></span> Destination management</a>
                        <a href="#" class="list-group-item list-group-item-action disabled"><span class="fas fa-file-invoice-dollar"></span> Billing History</a>
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"><span class="fas fa-chart-bar"></span>Reports</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            @can('create-hotels')
                                <button class="btn btn-success"><i class="fas fa-plus-square"></i> Add Hotel</button>
                            @endcan
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-striped">
                                <thead class="text-white bg-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">District</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Ranking</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Added at</th>
                                    <th scope="col">Edited at</th>
                                    @can('edit-hotels')
                                        <th scope="col">Edit</th>
                                    @endcan
                                    @can('delete-hotels')
                                        <th scope="col">Delete</th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hotels as $hotel)
                                    <tr>
                                        <th scope="row">{{ $hotel->id }}</th>
                                        <td>{{ $hotel->name }}</td>
                                        <td>{{ $hotel->destination_id }}</td>
                                        <td>{{ $hotel->address }}</td>
                                        <td>{{ $hotel->district }}</td>
                                        <td>{{ $hotel->city }}</td>
                                        <td class="d-inline-block">
                                            @for($i=1; $i<=5; $i++)
                                                @if($i<=$hotel->star_ranking)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </td>
                                        <td class="w-auto">
                                            <div class="row">
                                                <div class="col-md-6">{{count($hotel->rooms)}}</div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-success mr-3"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#hotelDescription{{$hotel->id}}">
                                                Description
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="hotelDescription{{$hotel->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $hotel->name }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-dark">{{ $hotel->description }}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $hotel->created_at }}</td>
                                        <td>{{ $hotel->updated_at }}</td>
                                        @can('edit-hotels')
                                            <td>
                                                <a href="{{ route('admin.hotels.edit', $hotel->id) }}">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        @endcan
                                        @can('delete-hotels')
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#deleteHotel{{$hotel->id}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteHotel{{$hotel->id}}" tabindex="-1"
                                                     aria-labelledby="deleteHotel{{$hotel->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="modal-header bg-warning progress-bar-animated progress-bar-striped">
                                                                    <h5 class="modal-title"
                                                                        id="deleteHotel{{$hotel->id}}">Delete Confirmation</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-dark ">
                                                                    <p>This action cannot be undone.</p>
                                                                    <p>Are you sure to delete {{ $hotel->name }} ?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success"
                                                                            data-dismiss="modal">Cancel
                                                                    </button>
                                                                    <button type="submit" class="btn btn-danger">Delete
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Users page end ================ -->
@endsection
