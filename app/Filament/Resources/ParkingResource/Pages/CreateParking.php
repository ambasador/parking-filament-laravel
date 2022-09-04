<?php

namespace App\Filament\Resources\ParkingResource\Pages;

use App\Filament\Resources\ParkingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateParking extends CreateRecord
{
    protected static string $resource = ParkingResource::class;
    protected function getRedirectUrl():string{
        return $this->getResource()::getUrl('index');
    }
}
