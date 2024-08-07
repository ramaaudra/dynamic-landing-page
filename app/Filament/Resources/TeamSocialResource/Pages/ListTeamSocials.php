<?php

namespace App\Filament\Resources\TeamSocialResource\Pages;

use App\Filament\Resources\TeamSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeamSocials extends ListRecords
{
    protected static string $resource = TeamSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
