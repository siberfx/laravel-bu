<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required",
            "description" => "required",
            "sku" => "required",
            "category" => "required",
            "sub_categories" => "required",
            "brand" => "required",
            "stock_amount" => "required",
            "stock_type" => "required",
            "net_quantity" => "required",
            "quantity_type" => "required",
            "image" => "required",
        ];
    }
}
