<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreInvoiceRequest extends FormRequest
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
            //
            'clientName' => ['required'],
            'clientEmail' => ['required', Rule::unique('invoices', 'clientEmail')],
            'clientStreetAddress' => ['required'],
            'clientCity' => ['required'],
            'clientZipCode' => ['required'],
            'clientCountry' => ['required'],
            'billerStreetAddress' => ['required'],
            'billerCity' => ['required'],
            'billerZipCode' => ['required'],
            'billerCountry' => ['required'],
            'invoiceDate' => ['required'],
            'paymentTerms' => ['required'],
            'paymentDueDate' => ['required'],
            'productDescription' => ['required'],
            'invoiceTotal' => ['required'],
            'invoiceItemList' => ['required'],
        ];
    }
}
