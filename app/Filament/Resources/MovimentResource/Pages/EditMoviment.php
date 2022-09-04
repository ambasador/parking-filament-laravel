<?php

namespace App\Filament\Resources\MovimentResource\Pages;

use App\Filament\Resources\MovimentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMoviment extends EditRecord
{
    protected static string $resource = MovimentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
