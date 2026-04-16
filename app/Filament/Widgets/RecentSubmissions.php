<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentSubmissions extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Recent Contact Submissions';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ContactSubmission::query()->latest()->limit(10)
            )
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email'),
                TextColumn::make('subject')
                    ->limit(40),
                TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime()
                    ->sortable(),
                BadgeColumn::make('read_at')
                    ->label('Status')
                    ->formatStateUsing(fn ($state) => $state ? 'Read' : 'Unread')
                    ->colors([
                        'success' => fn ($state) => $state !== null,
                        'warning' => fn ($state) => $state === null,
                    ]),
            ])
            ->actions([
                Action::make('mark_read')
                    ->label('Mark Read')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (ContactSubmission $record) => $record->read_at === null)
                    ->action(fn (ContactSubmission $record) => $record->update(['read_at' => now()])),
            ]);
    }
}
