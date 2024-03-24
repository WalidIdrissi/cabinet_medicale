<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\DetailAnalyseController;
use App\Http\Controllers\DetailOrdonnanceController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\TraitementController;
use App\Http\Controllers\TypeAnalyseController;
use App\Http\Controllers\TypeTraitementController;

Route::get('/', function () {return view('page01');});
//patient
Route::get('/patient', PatientController::class .'@index')->name('patient.index');
Route::get('/patient/create', PatientController::class . '@create')->name('patient.create');
Route::put('/patient/{patient}', PatientController::class .'@update')->name('patient.update');
Route::get('/patient/{patient}/edit', PatientController::class .'@edit')->name('patient.edit');
Route::delete('/patient/{patient}', PatientController::class .'@destroy')->name('patient.destroy');
Route::post('/patient', PatientController::class .'@store')->name('patient.store');
Route::get('/patient/{patient}', PatientController::class .'@show')->name('patient.show');
Route::get('/patient/{patient}/edit', PatientController::class .'@edit')->name('patient.edit');
//rendez_vous
Route::get('/rendez_vous', RendezVousController::class .'@index')->name('rendez_vous.index');
Route::get('/rendez_vous/create', RendezVousController::class . '@create')->name('rendez_vous.create');
Route::put('/rendez_vous/{rendez_vous}', RendezVousController::class .'@update')->name('rendez_vous.update');
Route::get('/rendez_vous/{rendez_vous}/edit', RendezVousController::class .'@edit')->name('rendez_vous.edit');
Route::delete('/rendez_vous/{rendez_vous}', RendezVousController::class .'@destroy')->name('rendez_vous.destroy');
Route::post('/rendez_vous', RendezVousController::class .'@store')->name('rendez_vous.store');
Route::get('/rendez_vous/{rendez_vous}', RendezVousController::class .'@show')->name('rendez_vous.show');
Route::get('/rendez_vous/{rendez_vous}/edit', RendezVousController::class .'@edit')->name('rendez_vous.edit');
//type_traitement
Route::get('/type_traitement', TypeTraitementController::class .'@index')->name('type_traitement.index');
Route::get('/type_traitement/create', TypeTraitementController::class . '@create')->name('type_traitement.create');
Route::put('/type_traitement/{type_traitement}', TypeTraitementController::class .'@update')->name('type_traitement.update');
Route::get('/type_traitement/{type_traitement}/edit', TypeTraitementController::class .'@edit')->name('type_traitement.edit');
Route::delete('/type_traitement/{type_traitement}', TypeTraitementController::class .'@destroy')->name('type_traitement.destroy');
Route::post('/type_traitement', TypeTraitementController::class .'@store')->name('type_traitement.store');
Route::get('/type_traitement/{type_traitement}', TypeTraitementController::class .'@show')->name('type_traitement.show');
Route::get('/type_traitement/{type_traitement}/edit', TypeTraitementController::class .'@edit')->name('type_traitement.edit');
//traitement
Route::get('/traitement', TraitementController::class .'@index')->name('traitement.index');
Route::get('/traitement/create', TraitementController::class . '@create')->name('traitement.create');
Route::put('/traitement/{traitement}', TraitementController::class .'@update')->name('traitement.update');
Route::get('/traitement/{traitement}/edit', TraitementController::class .'@edit')->name('traitement.edit');
Route::delete('/traitement/{traitement}', TraitementController::class .'@destroy')->name('traitement.destroy');
Route::post('/traitement', TraitementController::class .'@store')->name('traitement.store');
Route::get('/traitement/{traitement}', TraitementController::class .'@show')->name('traitement.show');
Route::get('/traitement/{traitement}/edit', TraitementController::class .'@edit')->name('traitement.edit');
//ordonnance
Route::get('/ordonnance', OrdonnanceController::class .'@index')->name('ordonnance.index');
Route::get('/ordonnance/create', OrdonnanceController::class . '@create')->name('ordonnance.create');
Route::put('/ordonnance/{ordonnance}', OrdonnanceController::class .'@update')->name('ordonnance.update');
Route::get('/ordonnance/{ordonnance}/edit', OrdonnanceController::class .'@edit')->name('ordonnance.edit');
Route::delete('/ordonnance/{ordonnance}', OrdonnanceController::class .'@destroy')->name('ordonnance.destroy');
Route::post('/ordonnance', OrdonnanceController::class .'@store')->name('ordonnance.store');
Route::get('/ordonnance/{ordonnance}', OrdonnanceController::class .'@show')->name('ordonnance.show');
Route::get('/ordonnance/{ordonnance}/edit', OrdonnanceController::class .'@edit')->name('ordonnance.edit');
//medicament
Route::get('/medicament', MedicamentController::class .'@index')->name('medicament.index');
Route::get('/medicament/create', MedicamentController::class . '@create')->name('medicament.create');
Route::put('/medicament/{medicament}', MedicamentController::class .'@update')->name('medicament.update');
Route::get('/medicament/{medicament}/edit', MedicamentController::class .'@edit')->name('medicament.edit');
Route::delete('/medicament/{medicament}', MedicamentController::class .'@destroy')->name('medicament.destroy');
Route::post('/medicament', MedicamentController::class .'@store')->name('medicament.store');
Route::get('/medicament/{medicament}', MedicamentController::class .'@show')->name('medicament.show');
Route::get('/medicament/{medicament}/edit', MedicamentController::class .'@edit')->name('medicament.edit');
//detail_ordonnance
Route::get('/detail_ordonnance', DetailOrdonnanceController::class .'@index')->name('detail_ordonnance.index');
Route::get('/detail_ordonnance/create', DetailOrdonnanceController::class . '@create')->name('detail_ordonnance.create');
Route::put('/detail_ordonnance/{detail_ordonnance}', DetailOrdonnanceController::class .'@update')->name('detail_ordonnance.update');
Route::get('/detail_ordonnance/{detail_ordonnance}/edit', DetailOrdonnanceController::class .'@edit')->name('detail_ordonnance.edit');
Route::delete('/detail_ordonnance/{detail_ordonnance}', DetailOrdonnanceController::class .'@destroy')->name('detail_ordonnance.destroy');
Route::post('/detail_ordonnance', DetailOrdonnanceController::class .'@store')->name('detail_ordonnance.store');
Route::get('/detail_ordonnance/{detail_ordonnance}', DetailOrdonnanceController::class .'@show')->name('detail_ordonnance.show');
Route::get('/detail_ordonnance/{detail_ordonnance}/edit', DetailOrdonnanceController::class .'@edit')->name('detail_ordonnance.edit');
//analyse
Route::get('/analyse', AnalyseController::class .'@index')->name('analyse.index');
Route::get('/analyse/create', AnalyseController::class . '@create')->name('analyse.create');
Route::put('/analyse/{analyse}', AnalyseController::class .'@update')->name('analyse.update');
Route::get('/analyse/{analyse}/edit', AnalyseController::class .'@edit')->name('analyse.edit');
Route::delete('/analyse/{analyse}', AnalyseController::class .'@destroy')->name('analyse.destroy');
Route::post('/analyse', AnalyseController::class .'@store')->name('analyse.store');
Route::get('/analyse/{analyse}', AnalyseController::class .'@show')->name('analyse.show');
Route::get('/analyse/{analyse}/edit', AnalyseController::class .'@edit')->name('analyse.edit');
//type_analyse
Route::get('/type_analyse', TypeAnalyseController::class .'@index')->name('type_analyse.index');
Route::get('/type_analyse/create', TypeAnalyseController::class . '@create')->name('type_analyse.create');
Route::put('/type_analyse/{type_analyse}', TypeAnalyseController::class .'@update')->name('type_analyse.update');
Route::get('/type_analyse/{type_analyse}/edit', TypeAnalyseController::class .'@edit')->name('type_analyse.edit');
Route::delete('/type_analyse/{type_analyse}', TypeAnalyseController::class .'@destroy')->name('type_analyse.destroy');
Route::post('/type_analyse', TypeAnalyseController::class .'@store')->name('type_analyse.store');
Route::get('/type_analyse/{type_analyse}', TypeAnalyseController::class .'@show')->name('type_analyse.show');
Route::get('/type_analyse/{type_analyse}/edit', TypeAnalyseController::class .'@edit')->name('type_analyse.edit');
//detail_analyse
Route::get('/detail_analyse', DetailAnalyseController::class .'@index')->name('detail_analyse.index');
Route::get('/detail_analyse/create', DetailAnalyseController::class . '@create')->name('detail_analyse.create');
Route::put('/detail_analyse/{detail_analyse}', DetailAnalyseController::class .'@update')->name('detail_analyse.update');
Route::get('/detail_analyse/{detail_analyse}/edit', DetailAnalyseController::class .'@edit')->name('detail_analyse.edit');
Route::delete('/detail_analyse/{detail_analyse}', DetailAnalyseController::class .'@destroy')->name('detail_analyse.destroy');
Route::post('/detail_analyse', DetailAnalyseController::class .'@store')->name('detail_analyse.store');
Route::get('/detail_analyse/{detail_analyse}', DetailAnalyseController::class .'@show')->name('detail_analyse.show');
Route::get('/detail_analyse/{detail_analyse}/edit', DetailAnalyseController::class .'@edit')->name('detail_analyse.edit');
//cabinet
Route::get('/cabinet', CabinetController::class .'@index')->name('cabinet.index');
Route::get('/cabinet/create', CabinetController::class . '@create')->name('cabinet.create');
Route::put('/cabinet/{cabinet}', CabinetController::class .'@update')->name('cabinet.update');
Route::get('/cabinet/{cabinet}/edit', CabinetController::class .'@edit')->name('cabinet.edit');
Route::delete('/cabinet/{cabinet}', CabinetController::class .'@destroy')->name('cabinet.destroy');
Route::post('/cabinet', CabinetController::class .'@store')->name('cabinet.store');
Route::get('/cabinet/{cabinet}', CabinetController::class .'@show')->name('cabinet.show');
Route::get('/cabinet/{cabinet}/edit', CabinetController::class .'@edit')->name('cabinet.edit');
