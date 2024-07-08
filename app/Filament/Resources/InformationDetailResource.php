<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformationDetailResource\Pages;
use App\Filament\Resources\InformationDetailResource\RelationManagers;
use App\Models\InformationDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformationDetailResource extends Resource
{
    protected static ?string $model = InformationDetail::class;

    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'Información extra';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $label = 'Detalle información';
    protected static ?string $pluralLabel = 'Detalles información';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('information_id')
                    ->relationship('information', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Información extra')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(250)
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
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('link')
                    ->label('Link')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('information.name')
                    ->label('Información')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Es activo'),
            ])
            ->filters([
                //
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
            'index' => Pages\ManageInformationDetails::route('/'),
        ];
    }
}
