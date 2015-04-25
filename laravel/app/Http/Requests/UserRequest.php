<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

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
			'name' => 'required|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Името е задължително.',
	        'name.max' => 'Името съдържа максимум 255 символа.',
	        'name.unique' => 'Името е заето.',
	        'password.required' => 'Паролата е задължителна.',
	        'password.confirmed' => 'Паролите не съвпадат.',
	        'password.min' => 'Паролата трябва да е минимум 6 символа.'
	    ];
	}

}
