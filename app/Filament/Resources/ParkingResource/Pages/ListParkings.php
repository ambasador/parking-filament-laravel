<?php

namespace App\Filament\Resources\ParkingResource\Pages;

use App\Filament\Resources\ParkingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParkings extends ListRecords
{
    protected static string $resource = ParkingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
