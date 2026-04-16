<?php

namespace App\Http\Controllers;

use App\Models\HelpfulLink;
use App\Models\Page;
use App\Models\TeamMember;

class PagesController extends Controller
{
    public function veterans()
    {
        $page = Page::where('slug', 'veterans')->where('is_published', true)->firstOrFail();
        return view('pages.veterans', compact('page'));
    }

    public function students()
    {
        $page = Page::where('slug', 'students')->where('is_published', true)->firstOrFail();
        return view('pages.students', compact('page'));
    }

    public function employees()
    {
        $page = Page::where('slug', 'employees')->where('is_published', true)->firstOrFail();
        return view('pages.employees', compact('page'));
    }

    public function rehab()
    {
        $page = Page::where('slug', 'rehab')->where('is_published', true)->firstOrFail();
        return view('pages.rehab', compact('page'));
    }

    public function government()
    {
        $page = Page::where('slug', 'government')->where('is_published', true)->firstOrFail();
        return view('pages.government', compact('page'));
    }

    public function peernow()
    {
        $page = Page::where('slug', 'peernow')->where('is_published', true)->firstOrFail();
        return view('pages.peernow', compact('page'));
    }

    public function ourStory()
    {
        $page = Page::where('slug', 'about-story')->where('is_published', true)->firstOrFail();
        return view('pages.about-story', compact('page'));
    }

    public function ourVision()
    {
        $page = Page::where('slug', 'about-vision')->where('is_published', true)->firstOrFail();
        return view('pages.about-vision', compact('page'));
    }

    public function team()
    {
        $page    = Page::where('slug', 'team')->where('is_published', true)->firstOrFail();
        $members = TeamMember::where('is_active', true)->orderBy('display_order')->get();
        return view('pages.team', compact('page', 'members'));
    }

    public function news()
    {
        $page = Page::where('slug', 'news')->where('is_published', true)->firstOrFail();
        return view('pages.news', compact('page'));
    }

    public function peerCounseling()
    {
        $page = Page::where('slug', 'peer-counseling')->where('is_published', true)->firstOrFail();
        return view('pages.peer-counseling', compact('page'));
    }

    public function helpfulLinks()
    {
        $page  = Page::where('slug', 'helpful-links')->where('is_published', true)->firstOrFail();
        $links = HelpfulLink::where('is_active', true)
                            ->whereIn('category', ['resources', 'counseling', 'other'])
                            ->orderBy('display_order')
                            ->get();
        return view('pages.helpful-links', compact('page', 'links'));
    }

    public function support()
    {
        $page  = Page::where('slug', 'support')->where('is_published', true)->firstOrFail();
        $links = HelpfulLink::where('is_active', true)
                            ->whereIn('category', ['crisis', 'government'])
                            ->orderBy('display_order')
                            ->get();
        return view('pages.support', compact('page', 'links'));
    }

    public function catchAll(string $slug)
    {
        $page = Page::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('pages.generic', compact('page'));
    }
}
