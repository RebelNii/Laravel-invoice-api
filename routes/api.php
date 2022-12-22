<?php

use App\Http\Controllers\API\V1\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function(){
    Route::get('/invoices', [InvoiceController::class, 'index']);
    Route::post('/invoice', [InvoiceController::class, 'store']);
    Route::get('/invoice/{invoice}', [InvoiceController::class, 'show']);
    Route::put('/invoice/{invoice}', [InvoiceController::class, 'update']);
    Route::put('/invoiced/{invoice}', [InvoiceController::class, 'updatePaidStatus']);
    Route::put('/invoicedd/{invoice}', [InvoiceController::class, 'updatePendingStatus']);
    Route::delete('/invoice/{invoice}', [InvoiceController::class, 'destroy']);
});
