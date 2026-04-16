<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpfulLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'url',
        'description',
        'category',
        'display_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active'     => 'boolean',
            'display_order' => 'integer',
        ];
    }
}
