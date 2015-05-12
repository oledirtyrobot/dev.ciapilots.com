@extends('layouts.master')

@section('content')

        <h2>Aircraft</h2>

        {!! Form::model($aircraft, array('method'=>'put', 'route'=>['aircraft.update', $aircraft->id], 'class'=>'form')) !!}

        <div class="form-group">
            {!! Form::label('Tail Number') !!}
            {!! Form::text('tailNumber', null,
            array('required', 'class'=>'form-control',
            'placeholder'=>'ex. N975BD'))  !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Aircraft', array('class'=>'btn btn-primary'))  !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(array('route'=>array('aircraft.destroy', $aircraft->id), 'method'=>'delete')) !!}
            <button type="submit">Delete Aircraft</button>
        {!! Form::close() !!}

        @include('errors.list')
    </div>

@endsection