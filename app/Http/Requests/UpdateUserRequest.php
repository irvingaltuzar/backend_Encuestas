<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
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
			'nombre' => 'required',
			'apepa' => 'required',
			'apema' => 'required',
			'position' => 'required',
			'usuarioId' => 'required',
			'usuarioId' => 'required',
            'brands' => 'required',
            'environments' => 'required',
        ];
    }

	public function attributes()
	{
		return [
			'nombre' => 'nombre',
			'apepa' => 'apellido paterno',
			'apema' => 'apellido materno',
			'position' => 'puesto',
            'brands' => 'marcas',
            'environments' => 'Ubicaciones',
		];
	}
}
