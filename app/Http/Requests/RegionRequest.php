<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:Kota,Kabupaten,Provinsi'],
            'bendera' => ['nullable', 'image', 'max:2048'],
            'lambang' => ['nullable', 'image', 'max:2048'],
            'julukan' => ['nullable', 'string'],
            'motto' => ['nullable', 'string'],
            'semboyan' => ['nullable', 'string'],
            'lokasi' => ['nullable', 'string'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'dashum' => ['nullable', 'string'],
            'harjad' => ['nullable', 'string'],
            'harjadate' => ['nullable', 'date'],
            'ibukota' => ['nullable', 'string'],
            'kepdar' => ['nullable', 'string'],
            'wakepdar' => ['nullable', 'string'],
            'sekda' => ['nullable', 'string'],
            'ketdprd' => ['nullable', 'string'],
            'luasdaerah' => ['nullable', 'string'],
            'totalpopulasi' => ['nullable', 'string'],
            'kepadatanpop' => ['nullable', 'string'],
            'agama' => ['nullable', 'string'],
            'bahasa' => ['nullable', 'string'],
            'ipm' => ['nullable', 'string'],
            'zonwak' => ['nullable', 'string'],
            'kodebps' => ['nullable', 'string'],
            'kodepos' => ['nullable', 'string'],
            'pelatken' => ['nullable', 'string'],
            'kodeiso3166' => ['nullable', 'string'],
            'kodekemendagri' => ['nullable', 'string'],
            'apbd' => ['nullable', 'string'],
            'pad' => ['nullable', 'string'],
            'dau' => ['nullable', 'string'],
            'lagudaerah' => ['nullable', 'string'],
            'rumahadat' => ['nullable', 'string'],
            'senjata' => ['nullable', 'string'],
            'flora' => ['nullable', 'string'],
            'fauna' => ['nullable', 'string'],
            'situs' => ['nullable', 'url'],
        ];

        if ($this->isMethod('post')) {
            $rules['name'][] = Rule::unique('regions')->where(function ($query) {
                return $query->where('type', $this->type);
            });
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['name'][] = Rule::unique('regions')->where(function ($query) {
                return $query->where('type', $this->type);
            })->ignore($this->region->id);
        }

        return $rules;
    }
}
