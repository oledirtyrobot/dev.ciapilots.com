@extends('layouts.master')

@section('scripts')
    @include('layouts.partials.jquery')
@endsection

@section('content')

    <h2>Create Captain</h2>

    {!! Form::open(array('route'=>'captains.store', 'class'=>'form')) !!}
        @include('layouts.partials.captainForm', ['submitButtonText'=>'Create Captain'])
    {!! Form::close() !!}

    {!! Form::open(array('route'=>array('captains.destroy', $captain->id), 'method'=>'delete')) !!}
        {!! Form::button('Delete Captain', array('class'=>'btn btn-danger', 'type'=>'submit'))  !!}
    {!! Form::close() !!}

    @include('errors.list')
    </div>

@endsection