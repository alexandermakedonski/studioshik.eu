<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ServiceRequest extends Request {

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
			'name'	=> 'required',
			'price'	=>	'required|numeric',
			'time' => 'required|numeric'
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Името е задължително.',
	        'price.required' => 'Цената е задължително.',
	        'price.numeric' => 'Цената трябва да съдържа само цифри.',
	        'time.required' => 'Цената е задължително.',
	        'time.numeric' => 'Цената трябва да съдържа само цифри.'

	    ];
	}

}
