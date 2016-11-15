@extends('layouts.admin')

@section('title')
    EDIT Message - {{ $element->id }}
@endsection

{{--@section('content')--}}

    {{--{{ $element->message }} <br>--}}
    {{--{{ $element->sender }} <br>--}}
    {{--{{ $element->receiver }} <br>--}}
    {{--{{ $element->status }} <br>--}}

{{--@endsection--}}



@section('content')
    {!! Form::model($element, [
        'route' => ["messages.update", $element->id, 'back_url' => isset($back_url) ? $back_url : ''],
        'method' => 'put'
        ]) !!}


    <div class="form-group {{ $errors->has("message") ? ' has-error' : ''}}">
        {!! Form::label("message", "Message Body") !!}

        {!! Form::text("message", null, ['class' => 'form-control']) !!}

        @if ($errors->has("message"))
            <div class="form_field_error has-error">
                        <span class="help-block">
                            {{ $errors->first("message") }}
                        </span>
            </div>
        @endif

    </div>


    <hr>
    {!! Form::submit('Save form') !!}
    <a href="{{ route("messages.index") }}">List</a>
    {!! Form::close() !!}

@endsection