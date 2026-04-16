<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Pages';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Page Settings')
                ->schema([
                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->alphaDash()
                        ->disabled(fn (string $operation) => $operation === 'edit')
                        ->dehydrated()
                        ->helperText(fn (string $operation) => $operation === 'create'
                            ? 'URL-friendly identifier, e.g. "partnerships". Lowercase letters, numbers, and hyphens only.'
                            : 'Slug cannot be changed after creation — it is tied to the page URL.'),
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Textarea::make('meta_description')
                        ->rows(2)
                        ->maxLength(300),
                    Toggle::make('is_published')
                        ->label('Published')
                        ->default(true),
                ]),

            Section::make('Hero Section')
                ->description('The full-width banner shown at the top of the page.')
                ->collapsible()
                ->schema([
                    Toggle::make('show_hero')
                        ->label('Show Hero Section')
                        ->default(true),
                    TextInput::make('hero_title')
                        ->label('Heading')
                        ->maxLength(255),
                    TextInput::make('hero_subtitle')
                        ->label('Subtitle')
                        ->maxLength(500),
                ]),

            Section::make('Body Content')
                ->description('The main content area of the page.')
                ->collapsible()
                ->schema([
                    Toggle::make('show_body')
                        ->label('Show Body Section')
                        ->default(true),
                    RichEditor::make('body')
                        ->label('')
                        ->toolbarButtons([
                            'bold', 'italic', 'underline', 'link',
                            'bulletList', 'orderedList', 'h2', 'h3',
                        ])
                        ->columnSpanFull(),
                ]),

            Section::make('Call to Action')
                ->description('The button section shown at the bottom of the page.')
                ->collapsible()
                ->schema([
                    Toggle::make('show_cta')
                        ->label('Show CTA Section')
                        ->default(true),
                    TextInput::make('cta_subtext')
                        ->label('Heading')
                        ->maxLength(255),
                    Textarea::make('cta_description')
                        ->label('Small text (shown under heading)')
                        ->rows(2)
                        ->maxLength(500),
                    TextInput::make('cta_text')
                        ->label('Button Label')
                        ->maxLength(100),
                    TextInput::make('cta_url')
                        ->label('Button URL')
                        ->placeholder('https://... or /#Contact')
                        ->maxLength(500)
                        ->helperText('Leave empty to hide the button.'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),
                Tables\Columns\IconColumn::make('show_hero')
                    ->label('Hero')
                    ->boolean(),
                Tables\Columns\IconColumn::make('show_body')
                    ->label('Body')
                    ->boolean(),
                Tables\Columns\IconColumn::make('show_cta')
                    ->label('CTA')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('slug')
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit'   => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
