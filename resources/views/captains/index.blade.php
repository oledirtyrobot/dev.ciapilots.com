@extends('layouts.master')
@section('scripts')
    @include('layouts.partials.jquery')
@endsection
@section('content')

    <h2>Captains</h2>

    <ul>
        @foreach ($captains as $captain)
            <li><a href="{{ action('CaptainsController@edit', [$captain->id]) }}">{{ $captain->firstName }} {{ $captain->lastName }}</a></li>
        @endforeach
    </ul>
    </p>
    <br /><br />

    {!! Form::open(array('route'=>'captains.store', 'class'=>'form')) !!}
        @include('layouts.partials.captainForm', ['submitButtonText'=>'Create Captain'])
    {!! Form::close() !!}

    @include('errors.list')

@endsection