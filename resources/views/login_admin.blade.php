@extends('layouts.base')

@section('content')
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="col mb-5 pb-5">
            <div>
                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid mx-auto d-block" alt="Responsive image">
            </div>
            <form class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-5">
                    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-light col">Submit</button>
            </form>
        </div>
    </div>
@endsection
