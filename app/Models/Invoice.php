<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'clientName', 'clientEmail', 'clientStreetAddress', 'clientCity', 'clientZipCode', 'clientCountry', 'billerStreetAddress', 'billerCity', 'billerZipCode', 'billerCountry', 'invoiceDate', 'paymentTerms', 'paymentDueDate', 'productDescription', 'invoiceTotal', 'invoiceItemList', 'invoicePaid', 'invoicePending', 'invoiceDraft'
    ];
}
