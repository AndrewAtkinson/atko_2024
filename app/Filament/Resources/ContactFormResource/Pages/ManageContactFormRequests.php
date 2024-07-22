<?php

namespace App\Filament\Resources\SkillResource\Pages;

use App\Filament\Resources\ContactFormRequestsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageContactFormRequests extends ManageRecords
{
    protected static string $resource = ContactFormRequestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
