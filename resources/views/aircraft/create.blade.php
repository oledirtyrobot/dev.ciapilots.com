@extends('layouts.master')

@section('content')

    <script src="/javascript/controllers/AircraftController.js"></script>
    <div ng-controller="AircraftController">

        <h2>Create New Aircraft</h2>

        <ul>
            @foreach($errors->all() as $error)
                <li><% $error %></li>
            @endforeach
        </ul>

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


    </div>

@endsection
