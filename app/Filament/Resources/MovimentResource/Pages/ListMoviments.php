<?php

namespace App\Filament\Resources\MovimentResource\Pages;

use App\Filament\Resources\MovimentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMoviments extends ListRecords
{
    protected static string $resource = MovimentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
