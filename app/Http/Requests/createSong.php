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
        return [
            'name' => 'required|string|max:255',
            'singer_id' => 'required',
            'albums_id' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric|min:0',
            'introduction' => 'required|string|max:500',
            'image_file' => 'required|image|max:2048', // validate that the file is an image and not larger than 2MB
            'audio_file' => 'required|mimes:mp3,wav|max:20480', // validate that the file is an audio file (mp3 or wav) and not larger than 20MB
        ];
    }
}
