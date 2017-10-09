@extends('layouts.app')

@section('content')
    @include('users.users',['users' => $user])
@endsection