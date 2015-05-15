@extends('layouts.master')

@section('scripts')
    @include('layouts.partials.jquery')
@endsection

@section('content')

        <h2>Create New Lead Passenger</h2>

        {!! Form::open(array('route'=>'passengers.store', 'class'=>'form')) !!}
            @include('layouts.partials.passengerForm', ['submitButtonText'=>'Create Passenger'])
        {!! Form::close() !!}
        @include('errors.list')

    </div>
    <script type="text/javascript">
        $('#aircraft_list').select2();
    </script>
@endsection
