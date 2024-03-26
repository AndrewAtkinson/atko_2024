<?php

use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome')
        ->with([
            'experiences' => Cache::remember('experiences', '525960', function () {
                return Experience::date()->get();
            }),
            'education' => Cache::remember('education', '525960', function () {
                return Education::all();
            }),
            'skills' => Cache::remember('skills', '525960', function () {
                return Skill::all();
            }),
            'knowledge' => Cache::remember('knowledge', '525960', function () {
                return Experience::masteries();
            }),
            'companies' => Cache::remember('companies', '525960', function () {
                return Experience::companies();
            }),
            'firstJobStartDate' => Cache::remember('firstJobStartDate', '1440', function () {
                return Experience::firstJobStartDate();
            }),
        ]);
});
