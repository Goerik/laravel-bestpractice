@extends('layouts.main')

@section('title')
    Messages list
@endsection

@section('content')
    @forelse ($messages as $message)
        {{ $message->message }} <br>
        {{ $message->sender }} <br>
        {{ $message->receiver }} <br>
        {{ $message->status }} <br>

    @empty
        No users found
    @endforelse
@endsection