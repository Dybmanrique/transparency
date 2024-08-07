<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentDetailResource\Pages;
use App\Filament\Resources\DocumentDetailResource\RelationManagers;
use App\Models\DocumentDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentDetailResource extends Resource
{
    protected static ?string $model = DocumentDetail::class;

    protected static ?int $navigationSort = 8;
    protected static ?string $navigationGroup = 'Documentos extra';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $label = 'Detalle de documento';
    protected static ?string $pluralLabel = 'Detalles de documentos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('document_id')
                    ->relationship('document', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Documento')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(250)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('file')
                    ->label('Archivo')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('documents')
                    ->required()
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
                Tables\Columns\TextColumn::make('document.name')
                    ->label('Documento')
                    ->searchable()
                    ->limit(30),
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
                SelectFilter::make('document')
                    ->label('Documento')
                    ->relationship('document', 'name')
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
            'index' => Pages\ManageDocumentDetails::route('/'),
        ];
    }
}
