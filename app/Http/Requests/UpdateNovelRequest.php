<?php

namespace App\Http\Requests;
//importo Rule
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNovelRequest extends FormRequest
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
            'title'=>'required|max:400|min:10',
            'price' => 'required|max:7|min:4',
            'series' => 'required|max:200|min:40',
            'sale_date' => 'required|date_format:date',
            'type' => ['required', Rule::in(['comic book', 'comic sans'])],
            'artists' => 'required|max:800|min:4',
            'writers' => 'required|max:800|min:4',
            'thumb'=> 'required|url|ends_with: jpg, png, webp|max:400',
            'description' => 'required|max:1200|min:50',
        ];
    }
}
