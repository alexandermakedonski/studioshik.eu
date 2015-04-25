<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PromotionRequest extends Request {

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

			'name' => 'required',
			'price' => 'required|numeric',
			'percent' => 'required|numeric',
			'popuptext' => 'required'
			//
		];
	}

	public function messages(){
		return[

		'name.required' => 'Името е задължително.',
		'price.required' => 'Цената е задължителна.',
		'price.numeric' => 'Цената трябва да е число.',
		'percent.required' =>'Процентът е задължителен.',
		'percent.numeric' => 'Процентът трябва да е число.',
		'popuptext.required' => 'Текстът е задължителен.',

		];
	}

}
