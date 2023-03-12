<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlbum extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>['required','string','min:3','max:50','regex:/^[A-Za-z0-9\sàáạảãăắằẳẵặâấầẩẫậèéẹẻẽêếềểễệđĐìíịỉĩóỏòọõôốồổỗộơớờởỡợùúụủũưứừửữựỳýỵỷỹú]+$/u'],
            'singer_id' => 'required |numeric',
            'description'=>'nullable',
            'file'=>'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ];
    }
}
