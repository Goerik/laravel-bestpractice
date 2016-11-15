@extends('layouts.main')

@section('title')
    User list
@endsection

@section('content')
    @forelse ($users as $user)
        {{ $user->name }} <br>
{{--        {{ $user->country->code }}--}}
        {{--{{ $user->sentMessages }}--}}
        {{ $user->receivedMessages }}
    @empty
        No users found
    @endforelse
@endsection