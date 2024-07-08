<?php

namespace App\Filament\Resources\NumeralResource\Pages;

use App\Filament\Resources\NumeralResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNumeral extends EditRecord
{
    protected static string $resource = NumeralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
