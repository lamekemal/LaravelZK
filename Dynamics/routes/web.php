<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionnaireController;
use AidynMakhataev\LaravelSurveyJs\app\Models\Survey;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/Dashboard', [SurveyController::class, 'index']);
Route::get('/Questionnaires/create', [QuestionnaireController::class, 'create']);
Route::post('/Questionnaires', [QuestionnaireController::class, 'store']);
Route::get('/Questionnaires/{questionnaire}', [QuestionnaireController::class, 'show']);
Route::get('/Questionnaires/{questionnaire}/questions/create', [QuestionController::class, 'create']);
Route::get('/Questionnaires/{questionnaire}/questions/create-qcu', [QuestionController::class, 'createQcu']);
Route::get('/Questionnaires/{questionnaire}/questions/create-qcm', [QuestionController::class, 'createQcm']);
Route::post('/Questionnaires/{questionnaire}/questions', [QuestionController::class, 'store']);
Route::post('/Questionnaires/{questionnaire}/questions-qcu', [QuestionController::class, 'storeQcu']);
Route::post('/Questionnaires/{questionnaire}/questions-qcm', [QuestionController::class, 'storeQcm']);




/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';
