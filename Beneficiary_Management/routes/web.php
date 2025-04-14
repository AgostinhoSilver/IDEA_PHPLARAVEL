<?php

use App\Http\Controllers\BeneficiariesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getBeneficiaries', [BeneficiariesController::class, 'getBeneficiaries']);
Route::get('/getFreshBeneficiaries', [BeneficiariesController::class, 'getNonCachedBeneficiaries']);
Route::post('/addBeneficiary', [BeneficiariesController::class, 'addNewBeneficiary']);
