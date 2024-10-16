<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => [
                'required',
                'string',
            ],
            'client_name' => [
                'required',
                'string',
            ],
            'team_leader_name' => [
                'required',
                'string',
            ],
            'employee_name' => [
                'required',
                'string',
            ],
            'status' => [
                'required',
                'string',
            ],
            'estimated_time' => [
                'required',
            ],
            'spent_time' => [
                'nullable',
            ],
            'contract_start_date' => [
                'required',
                'date',
            ],
            'contract_end_date' => [
                'nullable',
                'date',
            ],
        ];
    }
}
