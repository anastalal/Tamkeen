<?php

namespace App\Filament\Resources\FunctionalAreaResource\Pages;

use App\Filament\Resources\FunctionalAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFunctionalAreas extends ListRecords
{
    protected static string $resource = FunctionalAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
