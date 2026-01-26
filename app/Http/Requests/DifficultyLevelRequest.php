<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DifficultyLevelRequest extends FormRequest
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
        $isUpdate = $this->route('difficultyLevel') !== null;

        return [
            'sequence' => $isUpdate ? 'nullable|integer|min:1|max:99|unique:difficulty_levels,sequence' : 'required|integer|min:1|max:99|unique:difficulty_levels,sequence',
            'name' => 'required|string|max:255',
            'status' => 'required|integer',
        ];
    }
}
