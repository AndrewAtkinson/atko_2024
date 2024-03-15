<?php

use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')
        ->with([
            'experiences' => Experience::date()->get(),
            'education' => Education::all(),
            'skills' => Skill::all(),
        ]);
});
