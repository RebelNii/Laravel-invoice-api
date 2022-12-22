<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'clientName' => $this->clientName,
            'clientEmail' => $this->clientEmail,
            'clientStreetAddress' => $this->clientStreetAddress,
            'clientCity' => $this->clientCity,
            'clientEmail' => $this->clientEmail,
            'clientZipCode' => $this->clientZipCode,
            'clientCountry' => $this->clientCountry,
            'billerStreetAddress' => $this->billerStreetAddress,
            'billerCity' => $this->billerCity,
            'billerZipCode' => $this->billerZipCode,
            'billerCountry' => $this->billerCountry,
            'invoiceDate' => $this->invoiceDate,
            'paymentTerms' => $this->paymentTerms,
            'paymentDueDate' => $this->paymentDueDate,
            'productDescription' => $this->productDescription,
            'invoiceTotal' => $this->invoiceTotal,
            'invoiceDraft' => $this->invoiceDraft,
            'invoicePending' => $this->invoicePending,
            'invoicePaid' => $this->invoicePaid,
            'invoiceItemList' => json_decode($this->invoiceItemList),
        ];
    }
}
