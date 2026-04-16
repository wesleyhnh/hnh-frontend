<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use App\Models\Page;
use App\Models\TeamMember;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $publishedPages = Page::where('is_published', true)->count();

        $hiddenSections = Page::where(function ($q) {
            $q->where('show_hero', false)
              ->orWhere('show_body', false)
              ->orWhere('show_cta', false);
        })->count();

        $unreadSubmissions = ContactSubmission::whereNull('read_at')->count();

        $activeTeamMembers = TeamMember::where('is_active', true)->count();

        return [
            Stat::make('Published Pages', $publishedPages)
                ->description('Total live pages')
                ->icon('heroicon-o-document-text')
                ->color('success'),

            Stat::make('Pages with Hidden Sections', $hiddenSections)
                ->description('Pages with one or more sections turned off')
                ->icon('heroicon-o-eye-slash')
                ->color($hiddenSections > 0 ? 'warning' : 'gray'),

            Stat::make('Unread Submissions', $unreadSubmissions)
                ->description('Contact form submissions awaiting review')
                ->icon('heroicon-o-envelope')
                ->color($unreadSubmissions > 0 ? 'warning' : 'success'),

            Stat::make('Active Team Members', $activeTeamMembers)
                ->description('Shown on the team page')
                ->icon('heroicon-o-user-group')
                ->color('primary'),
        ];
    }
}
