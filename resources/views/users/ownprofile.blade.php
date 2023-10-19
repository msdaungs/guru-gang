@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex justify-content-between border rounded-2 p-4">
        <div class="pp-img">
            <img width="250" src="{{ asset('img/favicon.jpeg') }}" alt="Profile Image" class="rounded-circle">
            <input type="file" id="upload-file" hidden />
            <label for="upload-file" class="pp-edit">
                <i class="fa-regular fa-pen-to-square"></i>
            </label>
        </div>
        <div class="col-lg-8">
            <p>{{ Auth::user()->name}}</p>
        </div>
    </div>
</div>
@endsection