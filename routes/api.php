<?php

use Illuminate\Support\Facades\Route;

Route::middleware('hub.auth')->group(function () {
    Route::prefix('api/legal-documents/')->as('issjuridico.legal-documents.')->group(function () {
        Route::get('/')->name('index')->uses('IndexController');
        Route::post('/send')->name('send')->uses('SendController');
        Route::post('/view')->name('view')->uses('ViewController');
        Route::get('/historic')->name('historic')->uses('HistoricController');
        Route::get('/{document}/historic')->name('historic-document')->uses('HistoricDocumentController');
        Route::get('/{document}/download')->name('download')->uses('DownloadController');
        Route::get('/{document}/verify-signatures')->name('verify-signatures')->uses('VerifySignatureController');
        Route::get('/{document}/cancel')->name('cancel')->uses('CancelController');
        Route::get('/{document}/resend-signer/{signerDocument}')->name('resend-signer')->uses('ResendSignerController');
        Route::get('/{document}/change-signer/{signerDocument}')->name('change-signer')->uses('ChangeSignerController');
    });
    

});
