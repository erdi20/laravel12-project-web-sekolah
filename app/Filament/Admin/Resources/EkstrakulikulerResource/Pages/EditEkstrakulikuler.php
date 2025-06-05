<?php

namespace App\Filament\Admin\Resources\EkstrakulikulerResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Admin\Resources\EkstrakulikulerResource;

class EditEkstrakulikuler extends EditRecord
{
    protected static string $resource = EkstrakulikulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
