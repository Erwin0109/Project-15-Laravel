<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns'
        ];
    }
    function messages(){
        return[
            'nama.required' => 'Tabel Nama Wajib Diisi',
            'username.required' => 'Tabel Username Wajib Diisi',
            'username.unique' => 'Username Tersebut Sudah Terdaftar',
            'email.required' => 'Tabel Email Wajib Diisi',
        ];
    }
}
