@extends('layouts.master')

@section('scripts')
    @include('layouts.partials.jquery')
@endsection

@section('content')

    <h2>Aircraft</h2>

    <ul>
        @foreach ($aircraft as $thisAircraft)
            <li><a href="{{ action('AircraftController@edit', [$thisAircraft->id]) }}">{{ $thisAircraft->tailNumber }}</a></li>
        @endforeach
    </ul>
    </p>
    <br /><br />

    {!! Form::open(array('route'=>'aircraft.store', 'class'=>'form')) !!}
        @include('layouts.partials.aircraftForm', ['submitButtonText'=>'Create Aircraft'])
    {!! Form::close() !!}

    @include('errors.list')

@endsection