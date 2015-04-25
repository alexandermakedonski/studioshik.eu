<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request {

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
			'image'=>'required|image',
			'title' => 'required|unique:news',
			'text' => 'required'
		];
	}


	public function messages()
	{
		
		return[

		'title.required' => 'Заглавието е задължително.',
		'title.unique' => 'Заглавието се повтаря.',
		'image.required' => 'Картината е задължителна.',
		'text.required' => 'Текста е задължителен.'

		];
	}


}
