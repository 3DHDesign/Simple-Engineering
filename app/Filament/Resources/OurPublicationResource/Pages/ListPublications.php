<?php

namespace App\Filament\Resources\OurPublicationResource\Pages;

use App\Filament\Resources\OurPublicationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublications extends ListRecords
{
    protected static string $resource = OurPublicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
