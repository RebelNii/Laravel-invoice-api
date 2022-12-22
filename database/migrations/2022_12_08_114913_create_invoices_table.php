<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('clientName');
            $table->string('clientEmail');
            $table->string('clientStreetAddress');
            $table->string('clientCity');
            $table->integer('clientZipCode');
            $table->string('clientCountry');
            $table->string('billerStreetAddress');
            $table->string('billerCity');
            $table->integer('billerZipCode');
            $table->string('billerCountry');
            $table->string('invoiceDate');
            $table->string('paymentTerms');
            $table->string('paymentDueDate');
            $table->string('productDescription');
            $table->decimal('invoiceTotal',8,2);
            $table->boolean('invoicePaid')->nullable();
            $table->string('invoiceItemList');
            $table->boolean('invoicePending')->nullable();
            $table->string('invoiceDraft')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
