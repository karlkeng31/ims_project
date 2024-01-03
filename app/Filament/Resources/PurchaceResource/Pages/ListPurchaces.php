<?php

namespace App\Filament\Resources\PurchaceResource\Pages;

use App\Filament\Resources\PurchaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPurchaces extends ListRecords
{
    protected static string $resource = PurchaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
