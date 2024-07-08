<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegulationResource\Pages;
use App\Filament\Resources\RegulationResource\RelationManagers;
use App\Models\Regulation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegulationResource extends Resource
{
    protected static ?string $model = Regulation::class;

    protected static ?string $navigationGroup = 'Numeral 11';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $label = 'Regalamento';
    protected static ?string $pluralLabel = 'Regalamentos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('numeral_id')
                    ->relationship('numeral', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Numeral')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('description')
                    ->label('Descripción')
                    ->maxLength(600)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('link')
                    ->label('Link')
                    ->required()
                    ->maxLength(350)
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->label('Esta activo')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->label('Link')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('link')
                    ->label('Nombre')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Es activo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRegulations::route('/'),
        ];
    }
}
