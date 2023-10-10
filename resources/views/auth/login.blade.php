@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-5">{{ __('Luhna') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-md-6 mx-auto">
                            <div>
                                <label for="email" class="form-label text-md-end">{{ __('Email') }} <strong class="text-danger">*</strong></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Hming">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }} <strong class="text-danger">*</strong></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-check my-2">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Min chhinchhiah rawh') }}
                                </label>
                            </div>

                            <div class="text-center">
                            <button type="submit" class="btn btn-primary d-block mx-auto">
                                {{ __('Lut rawh') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Password I Theihnghih Em?') }}
                            </a>
                            @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection