@extends('layouts.main')

@section('title')
    Messages list
@endsection

@section('content')
    @forelse ($elements as $element)
        {{ $element->message }} <br>
        {{ $element->sender }} <br>
        {{ $element->receiver }} <br>
        {{ $element->status }} <br>
        {!! Form::open([
                          'route' => ["messages.destroy", $element->id],
                          'method' => 'delete',
                          'onsubmit' => "return confirm('Are you sure to delete element?')"
                      ]) !!}
        {!! Form::submit('Delete') !!}
        {!! Form::close() !!}

    @empty
        No users found
    @endforelse
@endsection