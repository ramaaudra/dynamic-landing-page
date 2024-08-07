<?php

namespace App\Filament\Resources\TeamSocialResource\Pages;

use App\Filament\Resources\TeamSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeamSocial extends CreateRecord
{
    protected static string $resource = TeamSocialResource::class;

        //redirect
        public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}


