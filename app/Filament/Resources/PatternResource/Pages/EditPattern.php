<?php

namespace App\Filament\Resources\PatternResource\Pages;

use App\Filament\Resources\PatternResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPattern extends EditRecord
{
    protected static string $resource = PatternResource::class;
    public function hasCombinedRelationManagerTabsWithContent(): bool
{
    return true;
}

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
