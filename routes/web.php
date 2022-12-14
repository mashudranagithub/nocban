<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SlidersController;


use App\Http\Controllers\PartnerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryItemController;
use App\Http\Controllers\FilePostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\NewsController;

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
	Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
	
	// Settings Routes Start Here
	Route::get('settings', [SettingsController::class, 'edit'])->name('settings');
	Route::put('settings/update', [SettingsController::class, 'update'])->name('update-settings');

	// Sliders Routes Start Here
	Route::get('/sliders', [SlidersController::class, 'index'])->name('sliders');
	Route::get('/slider/create', [SlidersController::class, 'create'])->name('createSlider');
	Route::post('/slider/create', [SlidersController::class, 'store'])->name('storeSlider');
	Route::get('/slider/edit/{id}', [SlidersController::class, 'edit'])->name('editSlider');
	Route::put('/slider/update/{id}', [SlidersController::class, 'update'])->name('updateSlider');
	Route::delete('/slider/delete/{id}', [SlidersController::class, 'destroy'])->name('deleteSlider');

	// Gallery Routes Start Here
	Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries');
	Route::get('/gallery/create', [GalleryController::class, 'create'])->name('createGallery');
	Route::post('/gallery/create', [GalleryController::class, 'store'])->name('storeGallery');
	Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('editGallery');
	Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('updateGallery');
	Route::delete('/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('deleteGallery');

	// Gallery Item Routes Start Here
	Route::get('/gallery/items', [GalleryItemController::class, 'index'])->name('gallery-items');
	Route::get('/gallery/item/create', [GalleryItemController::class, 'create'])->name('create-gallery-item');
	Route::post('/gallery/item/create', [GalleryItemController::class, 'store'])->name('store-gallery-item');
	Route::get('/gallery/item/edit/{id}', [GalleryItemController::class, 'edit'])->name('edit-gallery-item');
	Route::put('/gallery/item/update/{id}', [GalleryItemController::class, 'update'])->name('update-gallery-item');
	Route::delete('/gallery/item/delete/{id}', [GalleryItemController::class, 'destroy'])->name('delete-gallery-item');



	// Partners Routes Start Here
	Route::get('all-partners', [PartnerController::class, 'index'])->name('all-partners');
	Route::get('partner/create', [PartnerController::class, 'create'])->name('create-partner');
	Route::post('partner/create', [PartnerController::class, 'store'])->name('store-partner');
	Route::get('partner/edit/{id}', [PartnerController::class, 'edit'])->name('edit-partner');
	Route::put('partner/update/{id}', [PartnerController::class, 'update'])->name('update-partner');
	Route::delete('partner/delete/{id}', [PartnerController::class, 'destroy'])->name('delete-partner');

	// File Posts Routes Start Here
	Route::get('all-file-posts', [FilePostController::class, 'index'])->name('all-file-posts');
	Route::get('file-post/create', [FilePostController::class, 'create'])->name('create-file-post');
	Route::post('file-post/create', [FilePostController::class, 'store'])->name('store-file-post');
	Route::get('file-post/show/{id}', [FilePostController::class, 'show'])->name('show-file-post');
	Route::get('file-post/edit/{id}', [FilePostController::class, 'edit'])->name('edit-file-post');
	Route::put('file-post/update/{id}', [FilePostController::class, 'update'])->name('update-file-post');
	Route::delete('file-post/delete/{id}', [FilePostController::class, 'destroy'])->name('delete-file-post');

	// Posts Routes Start Here
	Route::get('all-posts', [PostController::class, 'index'])->name('all-posts');
	Route::get('post/create', [PostController::class, 'create'])->name('create-post');
	Route::post('post/create', [PostController::class, 'store'])->name('store-post');
	Route::get('post/show/{id}', [PostController::class, 'show'])->name('show-post');
	Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('edit-post');
	Route::put('post/update/{id}', [PostController::class, 'update'])->name('update-post');
	Route::delete('post/delete/{id}', [PostController::class, 'destroy'])->name('delete-post');

	// Games & Result Routes Start Here
	Route::get('all-games-results', [PostController::class, 'gamesResults'])->name('all-games-results');
	Route::get('games-result/create', [PostController::class, 'gamesResultCreate'])->name('create-games-result');
	Route::get('games-result/show/{id}', [PostController::class, 'gamesResultShow'])->name('show-games-result');
	Route::get('games-result/edit/{id}', [PostController::class, 'gamesResultEdit'])->name('edit-games-result');

	// Athlete Routes Start Here
	Route::get('all-athlete', [AthleteController::class, 'index'])->name('all-athlete');
	Route::get('athlete/create', [AthleteController::class, 'create'])->name('create-athlete');
	Route::post('athlete/create', [AthleteController::class, 'store'])->name('store-athlete');
	Route::get('athlete/show/{id}', [AthleteController::class, 'show'])->name('show-athlete');
	Route::get('athlete/edit/{id}', [AthleteController::class, 'edit'])->name('edit-athlete');
	Route::put('athlete/update/{id}', [AthleteController::class, 'update'])->name('update-athlete');
	Route::delete('athlete/delete/{id}', [AthleteController::class, 'destroy'])->name('delete-athlete');

	// Latest News Routes Start Here
	Route::get('all-news', [NewsController::class, 'index'])->name('all-news');
	Route::get('news/create', [NewsController::class, 'create'])->name('create-news');
	Route::post('news/create', [NewsController::class, 'store'])->name('store-news');
	Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('edit-news');
	Route::put('news/update/{id}', [NewsController::class, 'update'])->name('update-news');
	Route::delete('news/delete/{id}', [NewsController::class, 'destroy'])->name('delete-news');

});

Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');

Route::get('/newses/{cat}', [FrontendController::class, 'newss'])->name('newss');
Route::get('/post/{id}', [FrontendController::class, 'post'])->name('post');

Route::get('/all-galleries', [FrontendController::class, 'galleries'])->name('all-galleries');
Route::get('/galleries/{id}', [FrontendController::class, 'singleGallery'])->name('singleGallery');

Route::get('/contact', [FrontendController::class, 'contactpage'])->name('contactpage');
Route::get('/esportsroad', [FrontendController::class, 'esportsroad'])->name('esportsroad');
Route::get('/boaelection', [FrontendController::class, 'boaelection'])->name('boaelection');
Route::get('/19asiangames', [FrontendController::class, 'asiangames19'])->name('19asiangames');
Route::get('/noa', [FrontendController::class, 'noa'])->name('noa');
Route::get('/boaantidoping', [FrontendController::class, 'boaantidoping'])->name('boaantidoping');
Route::get('/athletes', [FrontendController::class, 'athletes'])->name('athletes');
Route::get('/nationalsportsawards', [FrontendController::class, 'nationalsportsawards'])->name('nationalsportsawards');
Route::get('/regionalsportsawards', [FrontendController::class, 'regionalsportsawards'])->name('regionalsportsawards');
Route::get('/internationalsportsawards', [FrontendController::class, 'internationalsportsawards'])->name('internationalsportsawards');
Route::get('/affiliated', [FrontendController::class, 'affiliated'])->name('affiliated');
Route::get('/activities', [FrontendController::class, 'activities'])->name('activities');
Route::get('/history', [FrontendController::class, 'history'])->name('history');
Route::get('/mission', [FrontendController::class, 'mission'])->name('mission');
Route::get('/executive', [FrontendController::class, 'executive'])->name('executive');
Route::get('/general', [FrontendController::class, 'general'])->name('general');
Route::get('/previous', [FrontendController::class, 'previous'])->name('previous');
Route::get('/administration', [FrontendController::class, 'administration'])->name('administration');
Route::get('/committees', [FrontendController::class, 'committees'])->name('committees');
Route::get('/constitution', [FrontendController::class, 'constitution'])->name('constitution');
Route::get('/organogram', [FrontendController::class, 'organogram'])->name('organogram');
Route::get('/doping', [FrontendController::class, 'doping'])->name('doping');
Route::get('/athleteProfiles', [FrontendController::class, 'athleteProfiles'])->name('athleteProfiles');

Route::get('/international', [FrontendController::class, 'international'])->name('international');
Route::get('/asianGames', [FrontendController::class, 'asianGames'])->name('asianGames');
Route::get('/asianBeachGames', [FrontendController::class, 'asianBeachGames'])->name('asianBeachGames');
Route::get('/asianYouthGames', [FrontendController::class, 'asianYouthGames'])->name('asianYouthGames');

Route::get('/commonWealthGames', [FrontendController::class, 'commonWealthGames'])->name('commonWealthGames');
Route::get('/20thCommonwealthGames', [FrontendController::class, 'CommonwealthGames20th'])->name('20thCommonwealthGames');

Route::get('/commonWealthYouthGames', [FrontendController::class, 'commonWealthYouthGames'])->name('commonWealthYouthGames');
Route::get('/childrenOfAsiaInternationalSportsGames', [FrontendController::class, 'childrenOfAsiaInternationalSportsGames'])->name('childrenOfAsiaInternationalSportsGames');
Route::get('/islamicSolidarityGames', [FrontendController::class, 'islamicSolidarityGames'])->name('islamicSolidarityGames');
Route::get('/summerOlympicGames', [FrontendController::class, 'summerOlympicGames'])->name('summerOlympicGames');
Route::get('/youthOlympicGames', [FrontendController::class, 'youthOlympicGames'])->name('youthOlympicGames');

Route::get('/southAsianGames', [FrontendController::class, 'southAsianGames'])->name('southAsianGames');
Route::get('/11thSouthAsianGames', [FrontendController::class, 'SouthAsianGames11th'])->name('11thSouthAsianGames');

Route::get('/southAsianBeachGames', [FrontendController::class, 'southAsianBeachGames'])->name('southAsianBeachGames');

Route::get('/national', [FrontendController::class, 'national'])->name('national');
Route::get('/8bangladeshgames', [FrontendController::class, 'bangladeshgames8'])->name('8bangladeshgames');
Route::get('/9bangladeshgames', [FrontendController::class, 'bangladeshgames9'])->name('9bangladeshgames');
Route::get('/dolpodoktalika', [FrontendController::class, 'dolpodoktalika'])->name('dolpodoktalika');

Route::get('/dpodoktalika', [FrontendController::class, 'dpodoktalika'])->name('dpodoktalika');

Route::get('/dpodoktalika/archary', [FrontendController::class, 'archary'])->name('archary');
Route::get('/dpodoktalika/badminton', [FrontendController::class, 'badminton'])->name('badminton');
Route::get('/dpodoktalika/sorirgothon', [FrontendController::class, 'sorirgothon'])->name('sorirgothon');
Route::get('/dpodoktalika/daba', [FrontendController::class, 'daba'])->name('daba');
Route::get('/dpodoktalika/cycling', [FrontendController::class, 'cycling'])->name('cycling');
Route::get('/dpodoktalika/football', [FrontendController::class, 'football'])->name('football');
Route::get('/dpodoktalika/gymnastic', [FrontendController::class, 'gymnastic'])->name('gymnastic');
Route::get('/dpodoktalika/hockey', [FrontendController::class, 'hockey'])->name('hockey');
Route::get('/dpodoktalika/kabadi', [FrontendController::class, 'kabadi'])->name('kabadi');
Route::get('/dpodoktalika/khokho', [FrontendController::class, 'khokho'])->name('khokho');
Route::get('/dpodoktalika/ragbi', [FrontendController::class, 'ragbi'])->name('ragbi');
Route::get('/dpodoktalika/swiming', [FrontendController::class, 'swiming'])->name('swiming');
Route::get('/dpodoktalika/tabletennis', [FrontendController::class, 'tabletennis'])->name('tabletennis');
Route::get('/dpodoktalika/taykoando', [FrontendController::class, 'taykoando'])->name('taykoando');
Route::get('/dpodoktalika/varuttolon', [FrontendController::class, 'varuttolon'])->name('varuttolon');
Route::get('/dpodoktalika/usha', [FrontendController::class, 'usha'])->name('usha');
Route::get('/dpodoktalika/athletics', [FrontendController::class, 'athletics'])->name('athletics');
Route::get('/dpodoktalika/basketball', [FrontendController::class, 'basketball'])->name('basketball');
Route::get('/dpodoktalika/boxing', [FrontendController::class, 'boxing'])->name('boxing');
Route::get('/dpodoktalika/cricket', [FrontendController::class, 'cricket'])->name('cricket');
Route::get('/dpodoktalika/fencing', [FrontendController::class, 'fencing'])->name('fencing');
Route::get('/dpodoktalika/golf', [FrontendController::class, 'golf'])->name('golf');
Route::get('/dpodoktalika/handball', [FrontendController::class, 'handball'])->name('handball');
Route::get('/dpodoktalika/judo', [FrontendController::class, 'judo'])->name('judo');
Route::get('/dpodoktalika/carate', [FrontendController::class, 'carate'])->name('carate');
Route::get('/dpodoktalika/roing', [FrontendController::class, 'roing'])->name('roing');
Route::get('/dpodoktalika/rolerscating', [FrontendController::class, 'rolerscating'])->name('rolerscating');
Route::get('/dpodoktalika/shooting', [FrontendController::class, 'shooting'])->name('shooting');
Route::get('/dpodoktalika/tennis', [FrontendController::class, 'tennis'])->name('tennis');
Route::get('/dpodoktalika/vollyball', [FrontendController::class, 'vollyball'])->name('vollyball');
Route::get('/dpodoktalika/resling', [FrontendController::class, 'resling'])->name('resling');

































Route::get('/local-photo-gallery', [FrontendController::class, 'localPhotoGallery'])->name('localPhotoGallery');
Route::get('/national-photo-gallery', [FrontendController::class, 'nationalPhotoGallery'])->name('nationalPhotoGallery');
Route::get('/international-photo-gallery', [FrontendController::class, 'internationalPhotoGallery'])->name('internationalPhotoGallery');
Route::get('/single-photo-gallery/{id}', [FrontendController::class, 'singlePhotoGallery'])->name('singlePhotoGallery');

Route::get('/local-video-gallery', [FrontendController::class, 'localVideoGallery'])->name('localVideoGallery');
Route::get('/national-video-gallery', [FrontendController::class, 'nationalVideoGallery'])->name('nationalVideoGallery');
Route::get('/international-video-gallery', [FrontendController::class, 'internationalVideoGallery'])->name('internationalVideoGallery');
Route::get('/single-video-gallery/{id}', [FrontendController::class, 'singleVideoGallery'])->name('singleVideoGallery');

Route::get('/message', [FrontendController::class, 'message'])->name('message');


Route::get('/activities/proposed', [FrontendController::class, 'proposedActivities'])->name('proposedActivities');
Route::get('/activities/completed', [FrontendController::class, 'completedActivities'])->name('completedActivities');

Route::get('/notices', [FrontendController::class, 'notices'])->name('notices');
Route::get('/publications', [FrontendController::class, 'publications'])->name('publications');

Route::get('/events', [FrontendController::class, 'events'])->name('events');
Route::get('/upcoming-events', [FrontendController::class, 'upcoming_events'])->name('upcomingEvents');

Route::get('/results/local', [FrontendController::class, 'results_local'])->name('resultsLocal');
Route::get('/results/national', [FrontendController::class, 'results_national'])->name('resultsNational');
Route::get('/results/international', [FrontendController::class, 'results_international'])->name('resultsInternational');

Route::get('/achievements/national', [FrontendController::class, 'achievements_national'])->name('achievementsNational');
Route::get('/achievements/international', [FrontendController::class, 'achievements_international'])->name('achievementsInternational');

Route::get('/athletes/all', [FrontendController::class, 'all_athletes'])->name('allAthletes');
Route::get('/athletes/recurve/men', [FrontendController::class, 'athletes_recurve_men'])->name('athletesRecurveMen');
Route::get('/athletes/recurve/women', [FrontendController::class, 'athletes_recurve_women'])->name('athletesRecurveWomen');
Route::get('/athletes/compound/men', [FrontendController::class, 'athletes_compound_men'])->name('athletesCompoundMen');
Route::get('/athletes/compound/women', [FrontendController::class, 'athletes_compound_women'])->name('athletesCompoundWomen');

Route::get('/sponsors', [FrontendController::class, 'sponsors'])->name('sponsors');

Route::get('/newses', [FrontendController::class, 'newses'])->name('newses');
Route::get('/singleNews/{id}', [FrontendController::class, 'single_news'])->name('singleNews');

