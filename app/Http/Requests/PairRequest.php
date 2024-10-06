<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PairRequest extends FormRequest
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
            'nomor_urut' => 'required|in:1,2,3,4,5',
            'party' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
            'pemimpin_id' => 'required|exists:users,id',
            'wakil_id' => 'required|exists:users,id',
            'short_bio' => 'required|string',
            'full_bio' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'election_date' => 'required|date',
        ];
    }
}
