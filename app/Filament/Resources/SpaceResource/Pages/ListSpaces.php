<?php

namespace App\Filament\Resources\SpaceResource\Pages;

use App\Filament\Resources\SpaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpaces extends ListRecords
{
    protected static string $resource = SpaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
