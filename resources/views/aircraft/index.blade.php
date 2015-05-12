@extends('layouts.master')

@section('angular')
@endsection

@section('content')

    <h2>Aircraft</h2>

    <ul>
        @foreach ($aircraft as $thisAircraft)
            <li><a href="<% action('AircraftController@edit', [$thisAircraft->id]) %>"><% $thisAircraft->tailNumber %></a></li>
        @endforeach
    </ul>
    </p>
    <br /><br />

    {!! Form::open(array('route'=>'aircraft.store', 'class'=>'form')) !!}

    <div class="form-group">
        {!! Form::label('Tail Number') !!}
        {!! Form::text('tailNumber', null,
        array('required', 'class'=>'form-control',
        'placeholder'=>'ex. N975BD'))  !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Aircraft', array('class'=>'btn btn-primary'))  !!}
    </div>
    {!! Form::close() !!}

    @include('errors.list')

@endsection