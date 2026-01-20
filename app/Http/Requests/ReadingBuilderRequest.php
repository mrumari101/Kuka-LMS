<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReadingBuilderRequest extends FormRequest
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
        $isUpdate = $this->route('readingBuilder') !== null;

        return [
            'discipline_id' => 'required|exists:disciplines,id',
            'level_id' => 'required|exists:levels,id',
            'chapter_id' => 'required|exists:chapters,id',
            'topic_id' => 'required|exists:topics,id',
            'description' => 'required|string',
            'file' => $isUpdate ? 'nullable|mimes:pdf|max:20480' : 'required|mimes:pdf|max:20480',
            'status' => 'required|integer',
        ];
    }
}
