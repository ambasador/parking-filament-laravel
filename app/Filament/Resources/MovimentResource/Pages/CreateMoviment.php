<?php

namespace App\Filament\Resources\MovimentResource\Pages;

use App\Filament\Resources\MovimentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMoviment extends CreateRecord
{
    protected static string $resource = MovimentResource::class;
    protected function getRedirectUrl():string{
        return $this->getResource()::getUrl('index');
    }
}
