<?php

namespace App\Filament\Widgets;

use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Courses', Education::all()->count()),
            Stat::make('Jobs', Experience::all()->count()),
            Stat::make('Skills', Skill::all()->count()),
        ];
    }
}
