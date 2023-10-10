@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-5">{{ __('Member In Registerna') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-md-6 mx-auto">
                            <div>
                                <label for="name" class="col-form-label text-md-end">{{ __('Hming') }} <strong class="text-danger">*</strong></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Hming">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="col-form-label text-md-end">{{ __('Email') }} <strong class="text-danger">*</strong></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="entirna@domain.com">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }} <strong class="text-danger">* <span class="notice">Lung 8 tal!</span></strong></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div>
                                <label for="password-confirm" class="col-form-label text-md-end">{{ __('Password Nem Nghehna') }} <strong class="text-danger">*</strong></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="********">
                            </div>

                            <div class="mt-2 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
