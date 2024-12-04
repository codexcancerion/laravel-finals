<?php
use App\Http\Controllers\HeadingController;
use App\Http\Controllers\ParagraphController;

Route::apiResource('headings', HeadingController::class);
Route::get('/headings', [HeadingController::class, 'index']);
Route::post('/headings', [HeadingController::class, 'store']);
Route::put('/headings/{heading}', [HeadingController::class, 'update']);
Route::patch('/headings/{heading}/{field}', [HeadingController::class, 'updateField']);

Route::apiResource('paragraphs', ParagraphController::class);
Route::get('/paragraphs', [ParagraphController::class, 'index']);
Route::post('/paragraphs', [ParagraphController::class, 'store']);
Route::put('/paragraphs/{paragraph}', [ParagraphController::class, 'update']);
Route::patch('/paragraphs/{paragraph}/{field}', [ParagraphController::class, 'updateField']);
