<?php

namespace App\Filament\Resources\OurPublicationResource\Pages;

use App\Filament\Resources\OurPublicationResource;
use App\Filament\Resources\PublicationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePublication extends CreateRecord
{
    protected static string $resource = OurPublicationResource::class;
}
