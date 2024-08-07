<?php

namespace App\Filament\Resources\TeamSocialResource\Pages;

use App\Filament\Resources\TeamSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeamSocial extends EditRecord
{
    protected static string $resource = TeamSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),

        ];
    }
  //redirect
        public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
