@extends('layouts.master')

@section('scripts')
    @include('layouts.partials.jquery')
@endsection

@section('content')

    <h2>Lead Passengers</h2>

    <ul>
        @foreach ($passengers as $passenger)
            <li><a href="{{ action('PassengersController@edit', [$passenger->id]) }}">{{ $passenger->firstName }} {{ $passenger->lastName }}</a></li>
        @endforeach
    </ul>
    <br /><br />
    <a href="{{ action('PassengersController@create') }}" class="btn btn-primary" role="button">Add Lead Passenger</a>
@endsection