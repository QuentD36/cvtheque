<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CvthequeController, CompetenceController, MetierController, ProfessionnelController};

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

//Route par défaut
//Route::get('/', function () {
//    return view('cvtheque');
//});

// get prend en paramètre : L'url reçu et un tableau comprenant le controller et la méthode recherchée
Route::get('/', [CvthequeController::class, 'index'])->name('accueil');

Route::get('competences/{competence}/destroyInside', [CompetenceController::class, 'destroyInside'])->name('competences.destroyInside');

Route::get('competences/v2', [CompetenceController::class, 'index2'])->name('competences.v2');

Route::get('competences/search', [CompetenceController::class, 'search'])->name('competences.search');

Route::get('competences/pro', [CompetenceController::class, 'proByComp'])->name('competences.pro');

Route::resource('competences', CompetenceController::class);

Route::get('metiers/{metier}/delete', [MetierController::class, 'delete'])->name('metiers.delete');

Route::resource('metiers', MetierController::class);

Route::get('professionnels/{slug}/metier', [ProfessionnelController::class, 'index'])->name('professionnels.metier');

Route::get('professionnels/v2', [ProfessionnelController::class, 'index2'])->name('professionnels.v2');

Route::get('professionnels/{slug}/metier2}', [ProfessionnelController::class, 'index2'])->name('professionnels.metier2');

Route::get('professionnels/search', [ProfessionnelController::class, 'search'])->name('professionnels.search');

Route::resource('professionnels', ProfessionnelController::class);


