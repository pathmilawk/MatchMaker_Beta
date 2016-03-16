<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SearchRequest extends Request {

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
			'Gender' => 'not_in:Select a gender',
			'AgeStart' => 'not_in:From',
			'AgeEnd' => 'not_in:To',
			'From' => 'not_in:Select a district',
			'Religion' => 'not_in:Select a religion',
			'MotherTongue' => 'not_in:Select a language',
		];
	}

}
