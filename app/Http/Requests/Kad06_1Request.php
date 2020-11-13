<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kad06_1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        if($this->path()=='kad06_1'){
            return true;
        }else{
            return false;
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image'=>'required|image'

        ];
    }
    public function messages()
    {
        return[
            'image.required'=>'ファイルを選択してください。',
            'image.image'=>'写真、画像のファイルを選択してください。'
        ];
    }
}
