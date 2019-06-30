@extends('layouts.app')

@section('content')
    <style>
        .lf{
            padding-top: 180px;
            padding-bottom: 190px;
            width: 50%;

        }

        .card{
            border-radius: 20px;
        }

        .text-uppercase{
            font-size: 20px;
        }

        .ml-lf{
            margin-left: 185px;
        }

        .text-LF{
            color: #1b1e21;
        }

        .Link-LF{
            color: #9fcdff;
            transition: color 0.5s;
        }

        .Link-LF:hover{
            color: #DEC79B;

        }

        .btn-LF{
            background-color: #18181E;
            border: none;
        }

    </style>

<div class="container lf">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="heading font-weight-bold text-uppercase text-center mt-3 mb-1 py-2">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Login.custom') }}">
                        @csrf

                        <div class="form-group col-md-12">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 ml-lf my-2">
                                <button type="submit" class="btn btn-primary btn-LF text-light">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="reminder--L">
                            <p class="text-center text-LF">Don't Have account? <a class="Link-LF" href="{{ route('register') }}">{{ __('Register Now') }}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
