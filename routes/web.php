<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\BibleController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\SettingController;

// Control Panel Routes
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Song Management
Route::resource('songs', SongController::class);
Route::post('songs/search', [SongController::class, 'search'])->name('songs.search');

// Bible Search
Route::post('bible/search', [BibleController::class, 'search'])->name('bible.search');
Route::get('bible/verse/{translation}/{book}/{chapter}/{verse}', [BibleController::class, 'getVerse'])
    ->name('bible.verse');
Route::post('bible/load', [BibleController::class, 'loadToPresentation'])->name('bible.load');

// Presentation Control
Route::get('presentation', [PresentationController::class, 'show'])->name('presentation.show');
Route::post('presentation/next', [PresentationController::class, 'next'])->name('presentation.next');
Route::post('presentation/previous', [PresentationController::class, 'previous'])->name('presentation.previous');
Route::post('presentation/goto/{index}', [PresentationController::class, 'goto'])->name('presentation.goto');
Route::post('presentation/clear', [PresentationController::class, 'clear'])->name('presentation.clear');
Route::post('presentation/load-song/{song}', [PresentationController::class, 'loadSong'])->name('presentation.load-song');

// Schedule Management
Route::resource('schedules', ScheduleController::class);

// Background/Media Management
Route::resource('backgrounds', BackgroundController::class)->except(['show']);
Route::post('backgrounds/upload', [BackgroundController::class, 'upload'])->name('backgrounds.upload');

// Theme Management
Route::resource('themes', ThemeController::class);

// Settings
Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
