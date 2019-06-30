@extends('layouts.app')

@section('content')
    <style>
        .RF{
            padding-top: 115px;
            padding-bottom: 110px;
        }

        .card{
            border-radius: 20px;
        }

        .text-uppercase{
            font-size: 20px;
        }

        .btn-RF{
            color: white;
            background-color:#18181E ;
            border: none;
            margin-left: 65px;
        }
    </style>

<div class="container RF">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="heading font-weight-bold text-uppercase text-center mt-3 mb-1 py-2">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row ">
                            <div class="col-md-6">
                            <label for="name" class="col-md-12 col-form-label">{{ __('Full Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('FullName') is-invalid @enderror" name="FullName" value="{{ old('FullName') }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-6 col-form-label ">{{ __('Address') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" required >

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 col-form-label">{{ __('Date Of Birth') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="date" class="form-control @error('DOB') is-invalid @enderror" name="DOB" value="{{ old('DOB') }}" required >

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="col-md-6 col-form-label ">{{ __('Phone No') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('PhoneNo') is-invalid @enderror" name="PhoneNo" value="{{ old('PhoneNo') }}" required >

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                            <label for="email" class="col-md-12 col-form-label ml-3">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        <div class="col-md-6">
                            <label for="email" class="col-md-12 col-form-label">{{ __('UserName') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="text" class="form-control @error('UserName') is-invalid @enderror" name="UserName" value="{{ old('UserName') }}" required >

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                             <div class="col-md-6">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required >
                            </div>
                             </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 my-2">
                                <button type="submit" class="btn btn-primary btn-RF">
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
