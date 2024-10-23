<?php

use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
    return redirect('/login');
    });
    Route::get('dashboard', function (){
        return view('pages.customers.index');
    });

    Route::get('/client',[AllController::class, 'client']);
    Route::post('/planning/client/added',[AllController::class, 'client_store'])->name('client.save');

    Route::get('/planning/info',[AllController::class, 'inform']);
    Route::post('/planning/info/added',[AllController::class, 'inform_store'])->name('inform.save');

    Route::get('/planning/medical',[AllController::class, 'med']);
    Route::post('/planning/medical/added',[AllController::class, 'med_store'])->name('med.save');
    
    Route::get('/planning/vaw',[AllController::class, 'vaw']);
    Route::post('/planning/vaw/added',[AllController::class, 'vaw_store'])->name('vaw.save');

    Route::get('/planning/obstet',[AllController::class, 'obstet']);
    Route::post('/planning/obstet/added',[AllController::class, 'obstet_store'])->name('obstet.save');

    Route::get('/planning/exam',[AllController::class, 'exam']);
    Route::post('/planning/exam/added',[AllController::class, 'exam_store'])->name('exam.save');

    Route::get('/planning/trans',[AllController::class, 'trans']);
    Route::post('/planning/trans/added',[AllController::class, 'trans_store'])->name('trans.save');
