<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $photo = 'required|image|mimes:jpeg,png,jpg,gif|
                max:2048';
        if (request()->id > 0) {
            $photo = '';
        }
        return [
            'name' => 'required',
            'phone' => 'required',
            'qualification' => 'required',
            // 'specility' => 'required',
            'name_ur' => 'required',
            'qualification_ur' => 'required',
            'photo' => $photo,
        ];
    }
}
