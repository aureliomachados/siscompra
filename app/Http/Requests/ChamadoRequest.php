<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChamadoRequest extends Request {

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
            'descricao' => 'required|min:4|max:2048',
            'dataAbertura' => 'required|date_format:d/m/Y',
            'dataFechamento' => 'required|date_format:d/m/Y',
		];
	}

}
