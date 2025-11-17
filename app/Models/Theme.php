<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'font_family',
        'font_size',
        'text_color',
        'background_color',
        'text_align',
        'has_shadow',
        'has_outline',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'has_shadow' => 'boolean',
        'has_outline' => 'boolean',
    ];

    /**
     * Get the songs that use this theme.
     */
    public function songs(): HasMany
    {
        return $this->hasMany(Song::class);
    }
}
