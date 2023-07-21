<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'from_destination_latitude' => ['required', 'string',],
            'from_destination_longitude' => ['required', 'string'],
            'to_destination_latitude' => ['required', 'string'],
            'to_destination_longitude' => ['required', 'string'],
            'address' => ['required', 'string'],
            'supplier_name' => ['required', 'string'],
            'supplier_phone' => ['required', 'string', 'size:11'],
            'receiver_name' => ['required', 'string'],
            'receiver_phone' => ['required', 'string', 'size:11'],
        ];
    }
}
