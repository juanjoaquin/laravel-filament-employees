<?php

namespace App\Filament\Admin\Resources\CountriesResource\Pages;

use App\Filament\Admin\Resources\CountriesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCountries extends CreateRecord
{
    protected static string $resource = CountriesResource::class;
}
