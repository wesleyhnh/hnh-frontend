<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

// ── Home ──────────────────────────────────────────────────────────────────────
Route::get('/',         [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact');

// ── Who We Serve ──────────────────────────────────────────────────────────────
Route::get('/veterans',  [PagesController::class, 'veterans']) ->name('veterans');
Route::get('/students',  [PagesController::class, 'students']) ->name('students');
Route::get('/employees', [PagesController::class, 'employees'])->name('employees');
Route::get('/rehab',     [PagesController::class, 'rehab'])    ->name('rehab');
Route::get('/government',[PagesController::class, 'government'])->name('government');

// ── PeerNOW Academy ───────────────────────────────────────────────────────────
Route::get('/peernow',   [PagesController::class, 'peernow'])  ->name('peernow');

// ── About ─────────────────────────────────────────────────────────────────────
Route::get('/about/our-story',  [PagesController::class, 'ourStory']) ->name('about.story');
Route::get('/about/our-vision', [PagesController::class, 'ourVision'])->name('about.vision');
Route::get('/team',             [PagesController::class, 'team'])     ->name('team');

// ── Resources ─────────────────────────────────────────────────────────────────
Route::get('/mental-health-news', [PagesController::class, 'news'])           ->name('news');
Route::get('/peer-counseling',    [PagesController::class, 'peerCounseling']) ->name('peer-counseling');
Route::get('/helpful-links',      [PagesController::class, 'helpfulLinks'])   ->name('helpful-links');
Route::get('/support',            [PagesController::class, 'support'])        ->name('support');

// ── Catch-all for admin-created static pages ──────────────────────────────────
// Must remain last — catches any slug not matched above
Route::get('/{slug}', [PagesController::class, 'catchAll'])
    ->where('slug', '[a-z0-9_-]+')
    ->name('page.dynamic');
