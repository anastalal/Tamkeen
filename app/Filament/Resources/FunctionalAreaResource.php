<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FunctionalAreaResource\Pages;
use App\Filament\Resources\FunctionalAreaResource\RelationManagers;
use App\Models\FunctionalArea;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FunctionalAreaResource extends Resource
{
    protected static ?string $model = FunctionalArea::class;
    public static function canCreate(): bool
    {
        return false;
    }
    public static function getModelLabel(): string
    {
        return 'مساحة وظيفية';
    }
    public static function getPluralModelLabel(): string
    {
        return __('المساحات الوظيفية');
    }

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListFunctionalAreas::route('/'),
            'create' => Pages\CreateFunctionalArea::route('/create'),
            'edit' => Pages\EditFunctionalArea::route('/{record}/edit'),
        ];
    }
}
