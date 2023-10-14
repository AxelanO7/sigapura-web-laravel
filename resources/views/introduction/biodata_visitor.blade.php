@extends('layouts.base')

@section('content')
    <div class="row align-items-center justify-content-center">
        <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="Responsive image">
        <h1 class="text-center text-white">Personal Data</h1>
    </div>
    <form class="col-xs-6 col-sm-6 col-md-6 mx-auto">
        <div class="mb-3">
            <label for="inputName" class="form-label text-white">Name</label>
            <input type="email" class="form-control" id="inputName">
        </div>
        <div class="mb-3">
            <label for="inputCountry" class="form-label text-white">Country</label>
            <input type="email" class="form-control" id="inputName">
        </div>
        <div class="mb-3">
            <label for="inputGuide" class="form-label text-white">Guide</label>
            <input type="email" class="form-control" id="inputGuide">
        </div>
        <div class="mb-5">
            <label for="inputGender" class="form-label text-white">Gender</label>
            <input type="password" class="form-control" id="inputGender">
        </div>
        <button type="submit" class="btn btn-light w-100">Login</button>
    </form>
    <div class="mb-5 pb-5" />
@endsection
