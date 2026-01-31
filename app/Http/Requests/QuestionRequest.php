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
            'difficulty_level_id' => 'required|exists:difficulty_levels,id',
            'question_type' => 'required|in:mcq,descriptive',

            'question_description' => 'nullable|string',
            'question_file'        => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',

            'solution_description' => 'nullable|string',
            'solution_file'        => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:10240',
            'status' => 'required|integer',
            // MCQ
            'description'   => 'nullable|array',
            'description.*' => 'nullable|string',
            'is_correct'    => 'nullable|array',


//            'file' => $isUpdate
//                ? 'nullable|file|mimes:pdf,doc,docx|max:10240'
//                : 'required|file|mimes:pdf,doc,docx|max:10240',

        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {

            /** ----------------------------------
             * Question (common for all types)
             * ---------------------------------- */
            if (
                empty($this->question_description) &&
                !$this->hasFile('question_file')
            ) {
                $validator->errors()->add(
                    'question_description',
                    'Either question description or question file is required.'
                );
            }

            /** ----------------------------------
             * MCQ Validation
             * ---------------------------------- */
            if ($this->question_type === 'mcq') {

                if (empty($this->description) || count($this->description) < 2) {
                    $validator->errors()->add(
                        'description',
                        'At least two MCQ options are required.'
                    );
                }

                if (!empty($this->description) && count($this->description) > 5) {
                    $validator->errors()->add(
                        'description',
                        'Maximum five MCQ options are allowed.'
                    );
                }

                if (array_sum($this->is_correct ?? []) !== 1) {
                    $validator->errors()->add(
                        'is_correct',
                        'Exactly one MCQ option must be correct.'
                    );
                }
            }

            /** ----------------------------------
             * Descriptive Validation
             * ---------------------------------- */
            if ($this->question_type === 'descriptive') {

                if (
                    empty($this->solution_description) &&
                    !$this->hasFile('solution_file')
                ) {
                    $validator->errors()->add(
                        'solution_description',
                        'Either solution description or solution file is required.'
                    );
                }
            }
        });
    }

}
