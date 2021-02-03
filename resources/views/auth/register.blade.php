@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ __('register') }}">
                        @csrf
                        <fieldset>

                            <legend class="offset-md-4">Enter your registration details</legend>

                            {{--    Username entry     --}}
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username:</label>

                                <div class="col-md-6">
                                    <input type="text" required name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" autocomplete="username" autofocus>

                                    {{--    Throws an error message if the username is invalid     --}}
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{--    Password entry     --}}
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>

                                <div class="col-md-6">
                                    <input type="password" required name="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">

                                    {{--    Throws an error message if the password is invalid or doesn't match the confirm password entry   --}}
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{--    Confirm Password entry     --}}
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password:</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{--    Email entry     --}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                                <div class="col-md-6">
                                    <input type="email" required name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email">

                                    {{--    Throws an error message if the email is invalid    --}}
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{--    Website URL entry     --}}
                            <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">Webpage URL:</label>

                                <div class="col-md-6">
                                    <input type="url" required name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}" autocomplete="url">

                                    {{--    Throws an error message if the URL is invalid     --}}
                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{--    Date of Birth entry     --}}
                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">Date of birth:</label>

                                <div class="col-md-6">
                                    <input type="date" required name="dob" id="dob" class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob') }}" autocomplete="dob">

                                    {{--    Throws an error message if the date of birth is invalid or they are younger than 18     --}}
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </fieldset>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" formnovalidate class="btn btn-primary">Submit Details</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
