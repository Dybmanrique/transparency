<?php

namespace App\Filament\Resources\DocumentDetailResource\Pages;

use App\Filament\Resources\DocumentDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDocumentDetails extends ManageRecords
{
    protected static string $resource = DocumentDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
