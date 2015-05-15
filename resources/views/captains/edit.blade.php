@extends('layouts.master')
@section('scripts')
    @include('layouts.partials.jquery')
@endsection
@section('content')

        <h2>Edit Captain</h2>

        {!! Form::model($captain, array('method'=>'put', 'route'=>['captains.update', $captain->id], 'class'=>'form')) !!}
            @include('layouts.partials.captainForm', ['submitButtonText'=>'Update Captain'])
        {!! Form::close() !!}

        {!! Form::open(array('route'=>array('captains.destroy', $captain->id), 'method'=>'delete')) !!}
            {!! Form::button('Delete Captain', array('class'=>'btn btn-danger', 'type'=>'submit'))  !!}
        {!! Form::close() !!}

        @include('errors.list')
    </div>

@endsection