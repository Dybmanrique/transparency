<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VerificationResource\Pages;
use App\Filament\Resources\VerificationResource\RelationManagers;
use App\Models\Indicator;
use App\Models\VerificationResource as ModelsVerificationResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VerificationResource extends Resource
{
    protected static ?string $model = ModelsVerificationResource::class;

    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'Indicador-CBC';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $label = 'Medio de verificación';
    protected static ?string $pluralLabel = 'Medios de verificación';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('indicator_id')
                    ->options(Indicator::all()->pluck('truncated_name', 'id'))
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Indicador')
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
                    ->label('Descripción')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('indicator.description')
                    ->label('Indicador')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('indicator.component.name')
                    ->label('Componente')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('indicator.component.condition.name')
                    ->label('Condición')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('link')
                    ->label('Link')
                    ->searchable()
                    ->limit(10),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Es activo'),
            ])
            ->filters([
                SelectFilter::make('is_active')
                    ->label('Estado')
                    ->options([
                        1 => 'Activo',
                        0 => 'Inactivo',
                    ]),
                SelectFilter::make('component')
                    ->relationship('indicator.component', 'name')
                    ->label('Componente')
                    ->searchable()
                    ->preload(),
                SelectFilter::make('condition')
                    ->relationship('indicator.component.condition', 'name')
                    ->label('Condición')
                    ->searchable()
                    ->preload()
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageVerifications::route('/'),
        ];
    }
}
