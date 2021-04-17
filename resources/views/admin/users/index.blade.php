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
                        <h1>Users Management</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Users Management</li>
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
                <div class="col-md-10">
                    @include('alerts.alerts')
                    <div class="card">
                        <div class="card-header">List users</div>
                        <div class="card-body">
                            <table class="table table-striped table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Signed up at</th>
                                    <th scope="col">Edited at</th>
                                    @can('edit-users')
                                        <th scope="col">Edit</th>
                                    @endcan
                                    @can('delete-users')
                                        <th scope="col">Delete</th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        @can('edit-users')
                                            <td>
                                                <a href="{{ route('admin.users.edit', $user->id) }}">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        @endcan
                                        @can('delete-users')
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#deleteUser{{$user->id}}">
                                                    <i class="fas fa-user-minus"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteUser{{$user->id}}" tabindex="-1"
                                                     aria-labelledby="deleteUser{{$user->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <div class="modal-header bg-warning progress-bar-animated progress-bar-striped">
                                                                    <h5 class="modal-title"
                                                                        id="deleteUser{{$user->id}}">Delete Confirmation</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-dark ">
                                                                    <p>This action cannot be undone.</p>
                                                                    <p>Are you sure to delete {{ $user->name }} ?</p>
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
