<?php

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

//use Illuminate\Routing\Route;

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::get('/', 'SiteController@showNewsOnMain')->name('newsOnMainPage');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/mission', function() {    
    return view('about-mission');
})->name('mission');

Route::get('/main-directions', function() {
    return view('main-deposits');
})->name('main-directions');

Route::get('/corporate', function() {
    $onCorporate = 1;
    return view('corporate');
})->name('corporate');

Route::get('/committee', function() {
    return view('committee');
})->name('committee');

Route::get('/growth-projects', function() {
    return view('growth-projects');
})->name('growth-projects');

Route::get('/place-of-birth', function() {
    return view('place-of-birth');
})->name('place-of-birth');

Route::get('/development-staff', function() {
    return view('development-staff');
})->name('development-staff');

Route::get('/career', function() {
    return view('career');
})->name('career');

Route::get('/jastar', function() {
    return view('jastar');
})->name('jastar');

Route::get('/our-values', function() {
    return view('our-values');
})->name('our-values');

Route::get('/career-contacts', function() {
    return view('career-contacts');
})->name('career-contacts');

Route::get('/suppliers-principles', function() {
    return view('suppliers-principles');
})->name('suppliers-principles');

Route::get('/suppliers-realization', function() {
    return view('suppliers-realization');
})->name('suppliers-realization');

Route::get('/suppliers-contacts', function() {
    return view('suppliers-contacts');
})->name('suppliers-contacts');

Route::get('/investors-contacts', function() {
    return view('investors-contacts');
})->name('investors-contacts');

Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts');

Route::get('/search/{search}', 'SiteController@search')->name('search');

Route::get('/admin-page', function() {
    return view('admin-page');
})->name('admin-page');

Route::get('/investors-and-media', 'SiteController@showNewsOnNewsPage')->name('newsPage');
Route::get('/investors-news/{id}', 'SiteController@openNews')->name('openNews');
Route::get('/history', 'SiteController@history')->name('history');
Route::get('/governance', 'SiteController@governance')->name('governance');
Route::get('/akbakay', 'SiteController@akbakay')->name('akbakay');
Route::get('/aktogay', 'SiteController@aktogay')->name('aktogay');
Route::get('/digital-mine', 'SiteController@digitalMine')->name('digital-mine');
Route::get('/mine-to-mill', 'SiteController@mineToMill')->name('mine-to-mill');
Route::get('/sana-safety', 'SiteController@sanaSafety')->name('sana-safety');
Route::get('/development-safety', 'SiteController@developmentSafety')->name('development-safety');
Route::get('/development-ecology', 'SiteController@developmentEcology')->name('development-ecology');
Route::get('/development-local-communities', 'SiteController@developmentLocalCommunities')->name('development-local-communities');
Route::get('/vacancies', 'SiteController@vacancies')->name('vacancies');
Route::get('/studying-programs', 'SiteController@studyingPrograms')->name('studying-programs');
Route::get('/corporate-newspaper', 'SiteController@corporateNewspaper')->name('corporate-newspaper');
Route::get('/gallery', 'SiteController@gallery')->name('gallery');
Route::get('/team-of-trainers', 'SiteController@teamOfTrainers')->name('team-of-trainers');
Route::get('/suppliers-form', 'SiteController@suppliers')->name('suppliers-form');
Route::get('/glossary', 'SiteController@glossary')->name('glossary');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('admin-news', 'NewsController');
Route::resource('admin-years', 'YearController');
Route::resource('admin-board-of-directors', 'BoardOfDirectorsController');
Route::resource('admin-board', 'BoardController');
Route::resource('admin-vice-presidents', 'VicePresidentController');
Route::resource('admin-akbakay', 'AkbakayController');
Route::resource('admin-aktogay', 'AktogayController');
Route::resource('admin-digital-mine', 'DigitalMineController');
Route::resource('admin-mine-to-mill', 'MineToMillController');
Route::resource('admin-sana-safety', 'SanaSafetyController');
Route::resource('admin-vacancies', 'VacancyController');
Route::resource('admin-education', 'EducationController');
Route::resource('admin-newspaper', 'NewspaperController');
Route::resource('admin-gallery', 'GalleryController');
Route::resource('admin-coaches', 'CoachController');
Route::resource('admin-safety', 'SafetyController');
Route::resource('admin-ecology', 'EcologyController');
Route::resource('admin-local-communities', 'LocalCommunityController');
Route::resource('admin-supplier-form', 'SupplierFormController');
Route::resource('admin-glossary', 'GlossaryController');

