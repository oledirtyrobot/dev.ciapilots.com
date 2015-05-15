<?php namespace itinerary\Http\Controllers;

use itinerary\Http\Requests;
use itinerary\Http\Controllers\Controller;
use itinerary\Captain;

class CaptainsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $captains = Captain::LastNameAscending()->get();
        return view('captains.index', compact('captains'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('captains.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CaptainRequest $request)
	{
        $captain = new Captain(array(
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email')
        ));
        $captain->save();
        flash()->success('A new Captain has been created.');
        return \Redirect::route('captains.index');

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $captain = Captain::findOrFail($id);

        return view('captains.show', compact('captain'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $captain = Captain::findOrFail($id);
        return view('captains.edit', compact('captain'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Requests\CaptainRequest $request)
	{
        $captain = Captain::find($id);
        /** @noinspection PhpParamsInspection */
        $captain->update([
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email')
        ]);
        flash()->success('The Captain has been updated.');
        return \Redirect::route('captains.index', array($captain->id));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Captain::destroy($id);
        flash()->success('The Captain has been deleted.');
        return \Redirect::route('captains.index');
	}

}
