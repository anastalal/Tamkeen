<?php

namespace App\Filament\Resources\PatternResource\RelationManagers;

use App\Filament\Resources\QuestionResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionsRelationManager extends RelationManager
{
    protected static string $relationship = 'questions';

    public function form(Form $form): Form
    {
       return QuestionResource::form($form);
        // return $form
        //     ->schema([
        //         Forms\Components\Textarea::make('text')
        //             ->required()
        //             ->columnSpanFull()
        //             ->maxLength(255),
        //         Forms\Components\Select::make('pattern_id')
        //         ->relationship('pattern','name')
        //             ->required()
        //     ]);
    }

    public function table(Table $table): Table
    {
        return QuestionResource::table($table)
        ->headerActions([
            Tables\Actions\CreateAction::make(),
            // Tables\Actions\AttachAction::make(),
        ]);;
        // return $table
        //     ->recordTitleAttribute('text')
        //     ->columns([
        //         Tables\Columns\TextColumn::make('text'),
        //     ])
        //     ->filters([
        //         //
        //     ])
        //     ->headerActions([
        //         Tables\Actions\CreateAction::make(),
        //     ])
        //     ->actions([
        //         Tables\Actions\EditAction::make(),
        //         Tables\Actions\DeleteAction::make(),
        //     ])
        //     ->bulkActions([
        //         Tables\Actions\BulkActionGroup::make([
        //             Tables\Actions\DeleteBulkAction::make(),
        //         ]),
        //     ]);
    }
}
