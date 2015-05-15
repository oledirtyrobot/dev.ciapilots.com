@extends('layouts.master')

@section('scripts')
    @include('layouts.partials.jquery')
@endsection

@section('content')

        <h2>Create New Aircraft</h2>

        {!! Form::open(array('route'=>'aircraft.store', 'class'=>'form')) !!}
            @include('layouts.partials.aircraftForm', ['submitButtonText'=>'Create Aircraft'])
        {!! Form::close() !!}
        @include('errors.list')

    </div>

@endsection
