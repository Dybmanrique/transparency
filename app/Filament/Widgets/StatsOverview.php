<?php

namespace App\Filament\Widgets;

use App\Models\Information;
use App\Models\Regulation;
use App\Models\VerificationResource;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Reglamentos', Regulation::count()),
            Stat::make('Medios de verificación', VerificationResource::count()),
            Stat::make('Información extra', Information::count()),
        ];
    }
}
