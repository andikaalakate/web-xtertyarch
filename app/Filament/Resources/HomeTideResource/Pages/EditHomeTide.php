<?php

namespace App\Filament\Resources\HomeTideResource\Pages;

use App\Filament\Resources\HomeTideResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeTide extends EditRecord
{
    protected static string $resource = HomeTideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
