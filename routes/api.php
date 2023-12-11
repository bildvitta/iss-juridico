<?php

use BildVitta\IssJuridico\Http\Controllers\Documents\CancelController;
use BildVitta\IssJuridico\Http\Controllers\Documents\ChangeSignerController;
use BildVitta\IssJuridico\Http\Controllers\Documents\DownloadController;
use BildVitta\IssJuridico\Http\Controllers\Documents\HistoricController;
use BildVitta\IssJuridico\Http\Controllers\Documents\HistoricDocumentController;
use BildVitta\IssJuridico\Http\Controllers\Documents\IndexController;
use BildVitta\IssJuridico\Http\Controllers\Documents\ResendSignerController;
use BildVitta\IssJuridico\Http\Controllers\Documents\SendController;
use BildVitta\IssJuridico\Http\Controllers\Documents\VerifySignatureController;
use BildVitta\IssJuridico\Http\Controllers\Documents\ViewController;
use Illuminate\Support\Facades\Route;

Route::middleware('hub.auth')->group(function () {
    Route::prefix('api/legal-documents/')->as('issjuridico.legal-documents.')->group(function () {
        Route::get('/')->name('index')->uses(IndexController::class);
        Route::post('/send')->name('send')->uses(SendController::class);
        Route::post('/view')->name('view')->uses(ViewController::class);
        Route::get('/historic')->name('historic')->uses(HistoricController::class);
        Route::get('/{document}/historic')->name('historic-document')->uses(HistoricDocumentController::class);
        Route::get('/{document}/download')->name('download')->uses(DownloadController::class);
        Route::get('/{document}/verify-signatures')->name('verify-signatures')->uses(VerifySignatureController::class);
        Route::get('/{document}/cancel')->name('cancel')->uses(CancelController::class);
        Route::get('/{document}/resend-signer/{signerDocument}')->name('resend-signer')->uses(ResendSignerController::class);
        Route::get('/{document}/change-signer/{signerDocument}')->name('change-signer')->uses(ChangeSignerController::class);
    });
});