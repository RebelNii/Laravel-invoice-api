<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreInvoiceRequest;
use App\Http\Requests\V1\UpdateInvoiceRequest;
use App\Http\Resources\V1\InvoiceCollection;
use App\Http\Resources\V1\InvoiceResource;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new InvoiceCollection(Invoice::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
        // dd($request);
        $invoice = [
            'clientName' => $request->clientName,
            'clientEmail' => $request->clientEmail,
            'clientStreetAddress' => $request->clientStreetAddress,
            'clientCity' => $request->clientCity,
            'clientZipCode' => $request->clientZipCode,
            'clientCountry' => $request->clientCountry,
            'billerStreetAddress' => $request->billerStreetAddress,
            'billerCity' => $request->billerCity,
            'billerZipCode' => $request->billerZipCode,
            'billerCountry' => $request->billerCountry,
            'invoiceDate' => $request->invoiceDate,
            'paymentTerms' => $request->paymentTerms,
            'paymentDueDate' => $request->paymentDueDate,
            'productDescription' => $request->productDescription,
            'invoiceTotal' => $request->invoiceTotal,
            'invoicePending' => $request->invoicePending,
            'invoiceItemList' => json_encode($request->invoiceItemList)
        ];

        $newInvoice = Invoice::create($invoice);

        return new InvoiceResource($newInvoice);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
        // dd($invoice);
        return new InvoiceResource($invoice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
        // dd($invoice);
        return $invoice->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
        return $invoice->delete();
    }

    public function updatePaidStatus(Request $request, Invoice $invoice){
        $request->validate([
            'invoicePaid' => ['required']
        ]);

        return $invoice->update($request->all());

        // $update = [
        //     'invoicePaid' => $request->
        // ];
    }

    public function updatePendingStatus(Request $request, Invoice $invoice){
        $request->validate([
            'invoicePending' => ['required']
        ]);

        return $invoice->update($request->all());
    }
}
