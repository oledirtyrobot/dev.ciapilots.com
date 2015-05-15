@extends('layouts.master')

@section('scripts')
    @include('layouts.partials.jquery')
@endsection

@section('content')

        <h2>Edit Aircraft</h2>

        {!! Form::model($aircraft, array('method'=>'put', 'route'=>['aircraft.update', $aircraft->id], 'class'=>'form')) !!}
            @include('layouts.partials.aircraftForm',['submitButtonText'=>'Update Aircraft'])
        {!! Form::close() !!}

        {!! Form::open(array('route'=>array('aircraft.destroy', $aircraft->id), 'method'=>'delete')) !!}
            {!! Form::button('Delete Aircraft', array('class'=>'btn btn-danger', 'type'=>'submit'))  !!}
        {!! Form::close() !!}

        @include('errors.list')
    </div>

@endsection