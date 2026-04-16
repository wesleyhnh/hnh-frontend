<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'meta_description',
        'show_hero',
        'hero_title',
        'hero_subtitle',
        'video_url',
        'show_body',
        'body',
        'show_cta',
        'cta_text',
        'cta_subtext',
        'cta_url',
        'cta_description',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'show_hero'    => 'boolean',
            'show_body'    => 'boolean',
            'show_cta'     => 'boolean',
            'is_published' => 'boolean',
        ];
    }
}
