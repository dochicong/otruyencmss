
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\AuthorController;

Route::crud('comic', ComicController::class);
Route::crud('chapter', ChapterController::class);
Route::crud('author', AuthorController::class);
