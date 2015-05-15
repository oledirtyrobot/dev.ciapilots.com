<?php namespace itinerary\Http\Requests;

use itinerary\Http\Requests\Request;

class CaptainRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ];
	}

}
