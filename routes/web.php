<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    $projects = Project::with('media')->get();
    $countProjects = Project::count();
    return view('welcome', compact('projects', 'countProjects'));
});

Route::get('/project/{project}', function (Project $project) {
    $project->load('media');
    return view('detail', compact('project'));
})->name('project.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
