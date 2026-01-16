<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DisciplineRequest extends FormRequest
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
    public function rules()
    {
        $isUpdate = $this->route('discipline') !== null;

        return [
            'name' => 'required|string|max:255',
            'discription' => 'nullable|string',
            'image' => $isUpdate ? 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048' : 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'status' => 'required|integer',
        ];
    }
}
