<?php namespace itinerary\Http\Controllers;

use itinerary\Aircraft;
use itinerary\Http\Requests;
use itinerary\Http\Controllers\Controller;

class AircraftController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $aircraft = Aircraft::all();
        return view('aircraft.index', compact('aircraft'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('aircraft.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\AircraftRequest $request)
	{
        $aircraft = new Aircraft(array(
            'tailNumber' => $request->get('tailNumber')
        ));
        $aircraft->save();

        flash()->success('The Aircraft has been created.');

        return \Redirect::route('aircraft.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$aircraft = Aircraft::findOrFail($id);

        return view('aircraft.show', compact('aircraft'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$aircraft = Aircraft::findOrFail($id);
        return view('aircraft.edit', compact('aircraft'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
 	 */
    public function update($id, Requests\AircraftRequest $request)
    {
        $aircraft = Aircraft::find($id);
        $aircraft->update([
            'tailNumber' => $request->get('tailNumber')
        ]);

        flash()->success('The Aircraft has been updated.');

        return \Redirect::route('aircraft.index',
            array($aircraft->id));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Aircraft::destroy($id);

        flash()->success('The Aircraft has been deleted.');

        return \Redirect::route('aircraft.index');
	}

}
