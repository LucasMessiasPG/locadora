<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'senha' => 'required|min:5|confirmed',
            'senha_confirmation' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome deve conter no mínimo 3 digitos',
            'senha.required' => 'O Campo senha é obrigatório.',
            'senha.min' => 'O campo senha deve conter no mínimo 5 digitos',
            'senha.confirmed' => 'A senha está divergente.'
        ];
    }

}
