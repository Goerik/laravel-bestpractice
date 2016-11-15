@extends('layouts.main')

@section('title')
    User list
@endsection

@section('content')
    @forelse ($users as $user)
        {{ $user->name }} <br>
    @empty
        No users found
    @endforelse
@endsection