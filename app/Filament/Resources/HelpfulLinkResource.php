<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HelpfulLinkResource\Pages;
use App\Models\HelpfulLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HelpfulLinkResource extends Resource
{
    protected static ?string $model = HelpfulLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?string $navigationLabel = 'Helpful Links';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('label')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('url')
                ->required()
                ->url()
                ->maxLength(500),
            Forms\Components\Textarea::make('description')
                ->rows(2)
                ->columnSpanFull(),
            Forms\Components\Select::make('category')
                ->required()
                ->options([
                    'crisis'     => 'Crisis',
                    'counseling' => 'Counseling',
                    'resources'  => 'Resources',
                    'government' => 'Government',
                    'other'      => 'Other',
                ]),
            Forms\Components\TextInput::make('display_order')
                ->label('Display Order')
                ->numeric()
                ->default(0)
                ->helperText('Lower numbers appear first.'),
            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('label')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('url')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('category')
                    ->colors([
                        'danger'  => 'crisis',
                        'warning' => 'counseling',
                        'success' => 'resources',
                        'primary' => 'government',
                        'gray'    => 'other',
                    ]),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('display_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),
            ])
            ->defaultSort('display_order')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'crisis'     => 'Crisis',
                        'counseling' => 'Counseling',
                        'resources'  => 'Resources',
                        'government' => 'Government',
                        'other'      => 'Other',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListHelpfulLinks::route('/'),
            'create' => Pages\CreateHelpfulLink::route('/create'),
            'edit'   => Pages\EditHelpfulLink::route('/{record}/edit'),
        ];
    }
}
