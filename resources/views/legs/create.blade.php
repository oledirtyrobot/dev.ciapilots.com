@extends('layouts.master')

@section('content')

    <h1>Create New Itinerary</h1>
    <ul>
        @foreach($errors->all()  as  $error)
            <li>{{  $error  }}</li>
        @endforeach
    </ul>
    <!--- display the main new itineraries form begin--->
    {!!  Form::open(array('route'  =>  'legs.create',  'class'  =>  'form'))  !!}

    <div  class="form-group">
        {!!  Form::label('Aircraft')  !!}
        {!! Form::select('tailNumber', array('Select: ', '2', '3', '4', '5'), array('required',
        'class'=>'form-control') ) !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Captain')  !!}
        {!! Form::select('captain', array('Select: ', '2', '3', '4', '5'), array('required',
        'class'=>'form-control') ) !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Departure Date')  !!}
        {!!  Form::date('depDate',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Departure Time')  !!}
        {!!  Form::time('depTime',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Departure Airport Code')  !!}
        {!!  Form::text('depAirport',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>'ex. KPHX'))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Departure FBO')  !!}
        {!!  Form::text('depFbo',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Lead Passenger')  !!}
        {!!  Form::text('passenger',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Passenger Notes: Shown on Itinerary')  !!}
        {!!  Form::textarea('publicNotes',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Passenger Notes: Not Shown on Itinerary')  !!}
        {!!  Form::textarea('privateNotes',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Arrival Airport Code')  !!}
        {!!  Form::text('arrAirport',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>'ex. KPHX'))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Arrival Date')  !!}
        {!!  Form::date('arrDate',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Arrival Time')  !!}
        {!!  Form::time('arrTime',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>

    <div  class="form-group">
        {!!  Form::label('Arrival FBO')  !!}
        {!!  Form::text('arrFbo',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!!  Form::label('Leg Notes: Transportation, Catering, etc.')  !!}
        {!!  Form::textarea('legNotes',  null,
        array('required',
        'class'=>'form-control',
        'placeholder'=>''))  !!}
    </div>
    <div  class="form-group">
        {!! Form::submit('Add Another Leg') !!}
        <br /><br />
        {!! Form::submit('Finished') !!}
    </div>

    {!!  Form::close()   !!}
    <!--- display the main new itineraries form end--->
@stop