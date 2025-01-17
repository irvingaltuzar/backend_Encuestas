<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnouncementRequest extends FormRequest
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
            'to' => 'required',
			'date' => 'date|required',
			'title' => 'required',
			'message' => 'required'
        ];
    }

	public function attributes()
	{
        return [
            'to' => 'usuario',
			'date' => 'fecha',
			'title' => 'titulo',
			'message' => 'mensaje'
        ];
	}
}
