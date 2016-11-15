@extends('layouts.main')

@section('title')
    Message - {{ $element->id }}
@endsection

@section('content')

        {{ $element->message }} <br>
        {{ $element->sender }} <br>
        {{ $element->receiver }} <br>
        {{ $element->status }} <br>

@endsection