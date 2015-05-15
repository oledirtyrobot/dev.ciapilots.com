@extends('layouts.master')

@section('scripts')
    @include('layouts.partials.jquery')
@endsection

@section('content')

        <h2>Lead Passenger</h2>
        {!! Form::model($passenger, array('method'=>'put', 'route'=>['passengers.update', $passenger->id], 'class'=>'form')) !!}
            @include('layouts.partials.passengerForm', ['submitButtonText'=>'Update Passenger'])
        {!! Form::close() !!}

        {!! Form::open(array('route'=>array('passengers.destroy', $passenger->id), 'method'=>'delete')) !!}
            {!! Form::button('Delete Passenger', array('class'=>'btn btn-danger', 'type'=>'submit'))  !!}
        {!! Form::close() !!}

        @include('errors.list')
    </div>
        <script type="text/javascript">
            $('#aircraft_list').select2();
        </script>

@endsection