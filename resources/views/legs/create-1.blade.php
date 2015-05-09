@extends('layouts.master')

@section('content')

    <h1>Create New Itinerary</h1>

    <!--- display the main new itineraries form begin--->

    <table cellpadding="5" cellspacing="5" border="1" align="center" id="itinerary" width="600">
        <tr><td colspan="4"><label class="pageTitle">Create New Itinerary</label></td></tr>
        {!!  Form::open(['route' => 'legs.store'])    !!}

        <tr  bgcolor="#6699FF"><td colspan="1"><label for="captName">Captain Name</label></td><td colspan="3"><label>Tail Number</label></td></tr>
        <tr>
            <td colspan="1">

                {!! Form::text('captName')    !!}
                {!! $errors->first('captName')  !!}
            </td>
            <td colspan="3">

                {!! Form::text('tailNumber')    !!}
                {!! $errors->first('tailNumber')  !!}
            </td>
        </tr>
        <tr bgcolor="#6699FF">
            <td><label for="depAirport">Departure Airport Code</label></td><td><label for="depDate">Departure Date</label></td>
            <td><label for="depTime">Time (Local)</label></td>
            <td><label for="flightTime" class="timepicker">Flight Time</label></td>
        </tr>
        <tr>
            <td>

                {!! Form::text('deptAirport')    !!}
                {!! $errors->first('deptAirport')  !!}
            </td>
            <td>

                {!! Form::text('deptDate')    !!}
                {!! $errors->first('deptDate')  !!}
            </td>
            <td>

                {!! Form::text('deptTime')    !!}
                {!! $errors->first('deptTime')  !!}
            </td>
            <td>

                {!! Form::text('flightTime')    !!}
                {!! $errors->first('flightTime')  !!}
            </td>
        </tr>
        <tr bgcolor="#6699FF"><td><label for="depFBOName">Departure FBO Name</label></td><td colspan="3" ><label for="passengers">Passengers</label></td>
        <tr>
            <td>

                {!! Form::text('depFBOName')    !!}
                {!! $errors->first('depFBOName')  !!}

                <br /><label for="depFBODetails" class="fboDetails">FBO Details (Address, Phone, etc.)</label><br/>

                {!! Form::textarea('depFBODetails', '', array('rows' => '6', 'cols' => '40')    )    !!}
                {!! $errors->first('depFBODetails')  !!}

            </td>
            <td colspan="3" valign="top">

                {!! Form::textarea('passengers', '', array('rows' => '6', 'cols' => '40')    )     !!}
                {!! $errors->first('passengers')  !!}
            </td>
        </tr>
        <tr bgcolor="#6699FF">
            <td><label for="arrAirport">Arrival Airport Code</label></td><td><label for="arrDate">Arrival Date</label></td><td colspan="2"><label for="arrTime" >Time (Local)</label></td>
        </tr>
        <tr>
            <td>

                {!! Form::text('arrAirport')    !!}
                {!! $errors->first('arrAirport')  !!}
            </td>
            <td>

                {!! Form::text('arrDate')    !!}
                {!! $errors->first('arrDate')  !!}
            </td>
            <td>

                {!! Form::text('arrTime')    !!}
                {!! $errors->first('arrTime')  !!}
            </td>
        </tr>
        <tr bgcolor="#6699FF">
            <td><label for="arrFBOName">Arrival FBO Name</label>
            </td>
            <td colspan="3"><label for="legNotes">Leg Notes (Transportation, Catering, etc.)</label></td>
        </tr>
        <tr>
            <td>

                {!! Form::text('arrFBOName')    !!}
                {!! $errors->first('arrFBOName')  !!}
                <br /><label for="arrFBODetails" class="fboDetails">FBO Details (Address, Phone, etc.)</label>
                <br />

                {!! Form::textarea('arrFBODetails', '', array('rows' => '6', 'cols' => '40')   )    !!}
                {!! $errors->first('arrFBODetails')  !!}
            </td>
            <td colspan="3">

                {!! Form::textarea('legNotes', '', array('rows' => '6', 'cols' => '40')    )    !!}
                {!! $errors->first('legNotes')  !!}
            </td>
        </tr>
        <tr  bgcolor="#6699FF">
            <td colspan="4">
                {!! Form::submit('Add Another Leg') !!}

                {!! Form::submit('Finished') !!}

            </td>
        </tr>

        {!!  Form::close()   !!}
    </table>


    <!--- display the main new itineraries form end--->
@stop