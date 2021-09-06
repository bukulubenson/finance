<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'middle_name' => '',
            'last_name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|before:tomorrow',
            'ward_region' => 'required',
            'email' => 'required|email',
            'email_2' => '',
            'phone' => 'required|max:9|min:9',
            'phone_2' => '',
            'image_path' => '',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Jina la kwanza latakiwa',
            'last_name.required' => 'Jina la kwanza latakiwa',
            'gender.required' => 'Jinsia yatakiwa',
            'birth_date.required' => 'Tarehe ya kuzaliwa yatakiwa',
            'birth_date.before' => 'Tarehe ya kuzaliwa sio sahihi',
            'ward_region.required' => 'Kata - Mkoa yatakiwa',
            'email.required' => 'Barua pepe yatakiwa',
            'phone.required' => 'Namba ya simu yatakiwa',
            'phone.max' => 'Namba ya simu sio sahihi. Mfano: 742529173',
            'phone.min' => 'Namba ya simu sio sahihi. Mfano: 742529173',
        ];
    }
}
