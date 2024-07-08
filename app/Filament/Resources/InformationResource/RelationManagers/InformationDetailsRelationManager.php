<?php

namespace App\Filament\Resources\InformationResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformationDetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'information_details';

    protected static ?string $label = 'Detalle de Información';
    protected static ?string $pluralLabel = 'Detalles de Información';
    protected static ?string $title = 'Detalles Información';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('link')
                    ->label('Link')
                    ->maxLength(355)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->label('Esta activo')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('link')
                    ->label('Link')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Es activo'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
