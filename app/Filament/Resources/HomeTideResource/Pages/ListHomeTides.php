<?php

namespace App\Filament\Resources\HomeTideResource\Pages;

use App\Filament\Resources\HomeTideResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListHomeTides extends ListRecords
{
    protected static string $resource = HomeTideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Semua'),
            'active' => Tab::make('Aktif')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', true)),
            'inactive' => Tab::make('Tidak Aktif')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', false)),
        ];
    }
}
