@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="{{route('editprofile')}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="namalgkp" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="oldPassword">Password</label>
                            <input type="password" name="oldPassword" class="form-control" id="oldPassword">
                            @error('oldPassword')
                                <div class="text-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">new Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        @error('password')
                                <div class="text-danger mt-2">{{$message}}</div>
                            @enderror
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        </div>
                        <div class="row">
                            <div class="ml-auto mr-3">
                                <button type="submit" class="btn btn-sm btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
