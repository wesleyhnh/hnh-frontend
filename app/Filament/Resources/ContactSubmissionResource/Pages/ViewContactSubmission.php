<?php

namespace App\Filament\Resources\ContactSubmissionResource\Pages;

use App\Filament\Resources\ContactSubmissionResource;
use App\Models\ContactSubmission;
use Filament\Resources\Pages\ViewRecord;

class ViewContactSubmission extends ViewRecord
{
    protected static string $resource = ContactSubmissionResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Auto-mark as read when viewed
        if (! $this->record->read_at) {
            $this->record->update(['read_at' => now()]);
            $data['read_at'] = now()->toDateTimeString();
        }

        return $data;
    }
}
