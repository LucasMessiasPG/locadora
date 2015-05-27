<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistroRequest extends Request {

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
            'login' => 'required|min:3|unique:usuario',
            'nome' => 'required|min:5',
            'senha' => 'required|min:5|confirmed',
            'senha_confirmation' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome deve conter no mínimo 3 digitos',
            'login.required' => 'O campo login é obrigatório.',
            'login.min' => 'O campo login deve conter no mínimo 3 digitos',
            'senha.required' => 'O Campo senha é obrigatório.',
            'senha.min' => 'O campo senha deve conter no mínimo 5 digitos',
            'senha.confirmed' => 'A senha está divergente.'
        ];
    }

}
