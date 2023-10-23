@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex justify-content-between border rounded-2 p-4 mb-3">
        <div class="pp-img">
            <img src="{{ asset('img/pp.png') }}" alt="Profile Image" class="rounded-circle">
            <input type="file" id="upload-file" hidden />
            <label for="upload-file" class="pp-edit">
                <i class="fa-regular fa-pen-to-square"></i>
            </label>
        </div>
        <div class="profile-details p-3 border">
            <div class="d-flex mb-3">
                <p class="pe-3"><i class="fa-solid fa-user"></i></p>
                <p>{{ Auth::user()->name}}</p>
            </div>
            <div class="d-flex mb-3">
                <p class="pe-3"><i class="fa-solid fa-briefcase"></i></p>
                <p>kalajdhh jdnhuxhef hdbfbhff hjvbwurfhb uhdfeywb ehwfbwbu</p>
            </div>
            <div class="d-flex mb-3">
                <p class="pe-3"><i class="fa-solid fa-graduation-cap"></i></p>
                <p>kalajdhh jdnhuxhef hdbfbhff hjvbwurfhb uhdfeywb ehwfbwbu</p>
            </div>
        </div>
        <div class="activity-details p-3 border">
            <p>hello</p>
        </div>
    </div>
    <div class="posts">
        <div class="row">
            <div class="col-lg-6 p-2">
                <div class="rounded-2 post">
                    <div class="rounded-2 post-pf p-1 d-flex align-items-center">
                        <img src="{{ asset('img/pp.png') }}" alt="Profile Image" class="rounded-circle me-3">
                        <p>{{ Auth::user()->name}} posted a post.</p>
                    </div>
                    <div class="card-body">
                        <p>jajdfa jsdgfsag jasasn jasfasb jasfbdjhj jhcdbcch hcbdchnsec hdjcbgweygcfuw cgdsfnhs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="post-pf">
                        <img src="{{ asset('img/pp.png') }}" alt="Profile Image" class="rounded-circle">
                        <h4>Hello</h4>
                    </div>
                    <div class="card-body">
                        pnow
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection