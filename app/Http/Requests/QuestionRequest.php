<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
        $isUpdate = $this->route('question') !== null;

        return [
            'discipline_id' => 'required|exists:disciplines,id',
            'level_id' => 'required|exists:levels,id',
            'chapter_id' => 'required|exists:chapters,id',
            'discipline_level_id' => 'required|exists:discipline_levels,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => $isUpdate
                ? 'nullable|file|mimes:pdf,doc,docx|max:10240'
                : 'required|file|mimes:pdf,doc,docx|max:10240',
            'status' => 'required|integer',
        ];
    }
}
