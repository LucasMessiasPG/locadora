<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request {

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
			'login' => 'required|min:3',
            'senha' => 'required|min:5'
		];
	}

    public function messages()
    {
        return [
            'login.required' => 'O campo nome é obrigatório.',
            'login.min' => 'O campo nome deve conter no mínimo 3 digitos',
            'senha.required' => 'O Campo senha é obrigatório.',
            'senha.min' => 'O campo senha deve conter no mínimo 5 digitos'
        ];
    }

}
