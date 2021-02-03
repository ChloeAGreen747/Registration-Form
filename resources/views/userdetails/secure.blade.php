@extends('layouts.app')

@section('content')

    {{--    Inserts the username of the user who is logged in into the welcome message     --}}
    <h1 style="text-align: center">Hello {{ $user->name }}!</h1>

@endsection
