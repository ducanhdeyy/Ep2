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
            'name' => ['required','string','max:255','regex:/^[a-zA-Z\s]*$/'],
            'singer_id' => 'required|numeric|exists:singers,id',
            'category_id' => 'required|numeric|exists:categories,id',
            'album_id' => 'required|numeric|exists:albums,id',
            'price' => 'required|numeric|min:0',
            'introduction' => 'required|string|max:500',
            'image_file' => 'required|image|max:2048', // validate that the file is an image and not larger than 2MB
            'audio_file' => 'required|mimes:mp3,wav|max:20480', // validate that the file is an audio file (mp3 or wav) and not larger than 20MB
        ];
    }
}
