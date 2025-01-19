<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'description' => 'max:5000',
            'priority' => 'required',
            'status' => 'required',
            'due_date' => 'date',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required.',
            'priority.required' => 'Priority is required.',
            'status.required' => 'Status is required.',
        ];
    }
}
