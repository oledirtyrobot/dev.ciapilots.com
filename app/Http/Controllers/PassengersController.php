<?php namespace itinerary\Http\Controllers;

use itinerary\Aircraft;
use itinerary\Http\Requests;
use itinerary\Http\Controllers\Controller;
use itinerary\Passenger;
use Illuminate\Http\Request;

class PassengersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $passengers = Passenger::LastNameAscending()->get();
        return view('passengers.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $aircraft = Aircraft::lists('tailNumber', 'id');

        return view('passengers.create')->with('aircraft', $aircraft);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\PassengerRequest $request)
    {
        $passenger = new Passenger(array(
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'email' => $request->get('email'),
            'publicNotes' => $request->get('publicNotes'),
            'privateNotes' => $request->get('privateNotes')
        ));
        $passenger->save();

        $passenger->aircraft()->attach($request->get('aircraft_list'));
        flash()->success('A new Passenger has been created.');

        return \Redirect::route('passengers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $passenger = Passenger::findOrFail($id);

        return view('passengers.show', compact('passenger'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $passenger = Passenger::findOrFail($id);

        //$aircraft = $passenger->aircraft->lists('tailNumber', 'id');
        $aircraft = Aircraft::lists('tailNumber', 'id');

        return view('passengers.edit', compact('passenger', 'aircraft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Requests\PassengerRequest $request)
    {
        $passenger = Passenger::find($id);
        /** @noinspection PhpParamsInspection */
        $passenger->update([
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'email' => $request->get('email'),
            'publicNotes' => $request->get('publicNotes'),
            'privateNotes' => $request->get('privateNotes')
        ]);

        $passenger->aircraft()->sync($request->get('aircraft_list'));

        flash()->success('The Passenger has been updated.');

        return \Redirect::route('passengers.index', array($passenger->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Passenger::destroy($id);
        flash()->success('The Passenger has been deleted.');

        return \Redirect::route('passengers.index');
    }

}
