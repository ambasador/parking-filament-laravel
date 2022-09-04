<?php

namespace App\Filament\Resources\SpaceResource\Pages;

use App\Filament\Resources\SpaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpace extends EditRecord
{
    protected static string $resource = SpaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
