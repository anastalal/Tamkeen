<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatternResource\Pages;
use App\Filament\Resources\PatternResource\RelationManagers;
use App\Models\Pattern;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Repeater;

class PatternResource extends Resource
{
    protected static ?string $model = Pattern::class;
    public static function canCreate(): bool
    {
        return false;
    }
    public static function getModelLabel(): string
    {
        return 'نمط';
    }
    public static function getPluralModelLabel(): string
    {
        return __('الانماط');
    }

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('color')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull(),
                   
                Forms\Components\Repeater::make('jobs')
                ->relationship()
                ->addActionLabel('اضافة وظائف')
                ->schema([
                    Forms\Components\Select::make('functional_area_id')->relationship('functional_area','name')
                    ->distinct()
                    ->label('المساحة الوظيفية')
                    ->required()
                    ->disableOptionsWhenSelectedInSiblingRepeaterItems(),

                    Forms\Components\RichEditor::make('description')
                    ->label('الوظائف المتاحة')
                ])
                ->minItems(5)
                ->collapsible()
                // ->addable(false)
                ->deletable(false)
                ->defaultItems(5)
                ->maxItems(5)
                
                    ->columnSpanFull(),
                // Forms\Components\Textarea::make('img')
                //     ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ColorColumn::make('color')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('questions_count')->counts('questions')
                    ,
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
            RelationManagers\QuestionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatterns::route('/'),
            'create' => Pages\CreatePattern::route('/create'),
            'edit' => Pages\EditPattern::route('/{record}/edit'),
        ];
    }
}
