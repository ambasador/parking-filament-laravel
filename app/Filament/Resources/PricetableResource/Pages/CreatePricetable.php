<?php

namespace App\Filament\Resources\PricetableResource\Pages;

use App\Filament\Resources\PricetableResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePricetable extends CreateRecord
{
    protected static string $resource = PricetableResource::class;
    protected function getRedirectUrl():string{
        return $this->getResource()::getUrl('index');
    }
}
