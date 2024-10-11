<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PairController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\Admin\RegionController as AdminRegionController;
use App\Http\Controllers\ElectionController;
// use App\Http\Controllers\Admin\CandidateController as AdminCandidateController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ElectionController as AdminElectionController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/collab', [HomeController::class, 'collab'])->name('about.collab');
Route::get('/amki-salman', [HomeController::class, 'amki_salman'])->name('about.amki-salman');
Route::get('/kuis', [HomeController::class, 'kuis'])->name('kuis');
Route::get('/kuis/{region:slug}', [HomeController::class, 'kuismulai'])->name('kuis.mulai');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
// Route::get('/voter-guide', [HomeController::class, 'voterGuide'])->name('voter.guide');

Route::get('/candidates', [CandidateController::class, 'frontindex'])->name('candidates.index');
Route::get('/candidates/{candidate:slug}', [CandidateController::class, 'show'])->name('candidates.show');
Route::get('/candidates/p/search', [CandidateController::class, 'search'])->name('candidates.search');

Route::get('/pasangan', [PairController::class, 'frontindex'])->name('pasangan.index');
Route::get('/pasangan/{pair:slug}', [PairController::class, 'show'])->name('pairs.show');
Route::get('/pasangan/p/search', [PairController::class, 'search'])->name('pairs.search');

Route::get('/regions', [RegionController::class, 'frontindex'])->name('regions.index');
Route::get('/regions/{region:slug}', [RegionController::class, 'show'])->name('regions.show');
Route::get('/regions/type/{type}', [RegionController::class, 'byType'])->name('regions.byType');
Route::get('/regions/search', [RegionController::class, 'search'])->name('regions.search');
Route::get('/regions/statistics', [RegionController::class, 'statistics'])->name('regions.statistics');


Route::get('/issues', [IssueController::class, 'index'])->name('issues.index');
Route::get('/issues/{region:slug}', [IssueController::class, 'show'])->name('issues.show');
Route::post('/issues', [IssueController::class, 'store'])->name('issues.store');
Route::post('/issues/{issue}/vote', [IssueController::class, 'vote'])->name('issues.vote');
Route::post('/issues/{issue}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/{comment}/vote', [CommentController::class, 'vote'])->name('comments.vote');

// Route::get('/elections', [ElectionController::class, 'index'])->name('elections.index');
// Route::get('/elections/{election}', [ElectionController::class, 'show'])->name('elections.show');

// Route::get('/news', [NewsController::class, 'index'])->name('news.index');
// Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('candidates', CandidateController::class)->names('candidates');
    Route::resource('pairs', PairController::class)->names('pairs');
    Route::resource('regions', RegionController::class)->names('regions');
    Route::resource('questions', QuestionController::class)->names('questions');

    // Route::resource('candidates', AdminCandidateController::class);
    // Route::resource('regions', AdminRegionController::class);
    // Route::resource('elections', AdminElectionController::class);
    // Route::resource('news', AdminNewsController::class);
});

// Authentication routes (assuming you're using Laravel Breeze)
require __DIR__ . '/auth.php';
