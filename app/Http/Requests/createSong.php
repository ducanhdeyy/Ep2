<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSong extends FormRequest
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
        $rules = [
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
            'singer_id' => 'required',
            'albums_id' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric|min:0',
            'introduction' => 'nullable|string|max:500',
        ];

        if ($this->hasFile('image_file')) {
            $rules['image_file'] = 'image|max:2048'; // validate that the file is an image and not larger than 2MB
        }

        if ($this->hasFile('audio_file')) {
            $rules['audio_file'] = 'mimes:mp3,wav|max:20480'; // validate that the file is an audio file (mp3 or wav) and not larger than 20MB
        }
        return $rules;
    }
}
