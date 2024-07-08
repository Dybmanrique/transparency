<?php

namespace App\Filament\Resources\RegulationResource\Pages;

use App\Filament\Resources\RegulationResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRegulations extends ManageRecords
{
    protected static string $resource = RegulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
