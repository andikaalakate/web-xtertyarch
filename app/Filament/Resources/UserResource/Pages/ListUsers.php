<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

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
            'admin' => Tab::make('Admin')
            ->modifyQueryUsing(fn (Builder $query) => $query->whereRelation('roles', 'name', 'admin')->orWhereRelation('roles', 'name', 'super_admin')),
            'customer' => Tab::make('Customer')
            ->modifyQueryUsing(fn (Builder $query) => $query->whereRelation('roles', 'name', 'customer')),
        ];
    }
}
