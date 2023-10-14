@extends('layouts.base')

@section('content')
    <div class="d-flex align-items-center justify-content-center">
        <div class="col mb-5 pb-5">
            <div>
                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid mx-auto d-block" alt="Responsive image">
            </div>
            <a href="{{ route('admin') }}">
                <button class="btn btn-light btn-block btn-lg btn_role col-6 mx-auto d-block">Admin</button>
            </a>
            <div class="mt-5">
            </div>
            <a href="{{ route('visitor') }}">
                <button class="btn btn-light btn-block btn-lg btn_role col-6 mx-auto d-block">Visitors</button>
            </a>
        </div>
    </div>
@endsection
