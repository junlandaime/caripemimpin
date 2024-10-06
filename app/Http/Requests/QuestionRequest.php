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
    public function rules(): array
    {
        return [
            'type' => 'required|in:identify,write',
            'question' => 'required|string|max:255',
            'options' => 'required_if:type,identify|array',
            'options.*' => 'required_if:type,identify|string',
            'answer' => 'required|string',
            'region_id' => 'required|exists:regions,id',
        ];
    }
}
