@extends('front.layout.master')

@section('body')
    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>User Edit</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users Management</a></li>
                        <li class="breadcrumb-item active">User Edit</li>
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
                        <div class="card-header">Edit user {{ $user->name }}</div>

                        <div class="card-body">
                            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control   @error('email') is-invalid @enderror" name="email"
                                               value="{{ $user->email }}" readonly required autocomplete="email"
                                               autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ $user->name }}" required autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group row">
                                    <label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>
                                    <div class="col-md-6">
                                        @foreach($roles as $role)
                                            <div class="form-check pt-1">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexCheckDefault{{$role->id}}" name="roles[]"
                                                       value="{{ $role->id }}"
                                                       @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                                <label class="form-check-label"
                                                       for="flexCheckDefault{{$role->id}}"> {{ $role->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
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
