<?php

namespace App\Filament\Resources\PricetableResource\Pages;

use App\Filament\Resources\PricetableResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPricetables extends ListRecords
{
    protected static string $resource = PricetableResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
