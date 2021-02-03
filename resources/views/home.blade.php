@extends('layouts.app')

{{--    This section is used in the app.blade.php file to display the page     --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br>

                    {{--    Links to the secure page and a logout button     --}}
                    <a href="/secure">Secure Page</a><br>
                    <a href={{ route('logout') }}>Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
