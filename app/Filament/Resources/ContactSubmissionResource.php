<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactSubmissionResource\Pages;
use App\Models\ContactSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContactSubmissionResource extends Resource
{
    protected static ?string $model = ContactSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Contact Submissions';

    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
        return (string) static::getModel()::whereNull('read_at')->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->disabled(),
            Forms\Components\TextInput::make('email')->disabled(),
            Forms\Components\TextInput::make('subject')->disabled()->columnSpanFull(),
            Forms\Components\Textarea::make('message')->disabled()->rows(6)->columnSpanFull(),
            Forms\Components\DateTimePicker::make('read_at')->disabled(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('read_at')
                    ->label('Status')
                    ->formatStateUsing(fn ($state) => $state ? 'Read' : 'Unread')
                    ->colors([
                        'success' => fn ($state) => $state !== null,
                        'warning' => fn ($state) => $state === null,
                    ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\Filter::make('unread')
                    ->label('Unread Only')
                    ->query(fn (Builder $query) => $query->whereNull('read_at'))
                    ->toggle(),
            ])
            ->actions([
                Tables\Actions\Action::make('mark_read')
                    ->label('Mark as Read')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (ContactSubmission $record) => $record->read_at === null)
                    ->action(fn (ContactSubmission $record) => $record->update(['read_at' => now()])),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactSubmissions::route('/'),
            'view'  => Pages\ViewContactSubmission::route('/{record}'),
        ];
    }
}
