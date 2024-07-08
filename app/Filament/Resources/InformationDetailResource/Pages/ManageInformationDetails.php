<?php

namespace App\Filament\Resources\InformationDetailResource\Pages;

use App\Filament\Resources\InformationDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInformationDetails extends ManageRecords
{
    protected static string $resource = InformationDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
