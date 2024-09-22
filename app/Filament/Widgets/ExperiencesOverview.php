<?php

namespace App\Filament\Widgets;

use App\Models\Experience;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ExperiencesOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Experiences', Experience::count()),
        ];
    }
}
