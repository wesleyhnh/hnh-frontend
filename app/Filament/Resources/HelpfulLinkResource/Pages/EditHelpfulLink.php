<?php

namespace App\Filament\Resources\HelpfulLinkResource\Pages;

use App\Filament\Resources\HelpfulLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHelpfulLink extends EditRecord
{
    protected static string $resource = HelpfulLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
