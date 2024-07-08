<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConditionResource\Pages;
use App\Filament\Resources\ConditionResource\RelationManagers;
use App\Models\Condition;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConditionResource extends Resource
{
    protected static ?string $model = Condition::class;

    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Indicador-CBC';
    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $label = 'Condición';
    protected static ?string $pluralLabel = 'Condiciones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Nombre')
                    ->required()->maxLength(255)->columnSpanFull(),
                Forms\Components\Textarea::make('description')->label('Descripción')->required()->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')->default(true)->label('Esta activo')->required()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre')->searchable(),
                Tables\Columns\TextColumn::make('description')->label('Descripcion')->searchable()->limit(60),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Es activo'),    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListConditions::route('/'),
            'create' => Pages\CreateCondition::route('/create'),
            'edit' => Pages\EditCondition::route('/{record}/edit'),
        ];
    }
}
