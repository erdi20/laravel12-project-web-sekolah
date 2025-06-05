<?php

namespace App\Filament\Admin\Resources\EkstrakulikulerResource\Pages;

use App\Filament\Admin\Resources\EkstrakulikulerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEkstrakulikulers extends ListRecords
{
    protected static string $resource = EkstrakulikulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
