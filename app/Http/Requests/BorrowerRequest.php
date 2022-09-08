<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BorrowerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'step' => 'required|integer',
            'login_id' => 'string',
            'monthly_sales' => 'numeric',
            'monthly_expenses' => 'numeric',
            'other_financing' => 'string',
            'other_financing_amount' => 'numeric',
            'legal_business_name' => 'string',
            'business_physical_address' => 'string',
            'business_physical_city' => 'string',
            'business_physical_province' => 'string',
            'business_physical_postal' => 'string',
            'email' => 'email',
            'dob' => 'required|date',
        ];
    }
}
