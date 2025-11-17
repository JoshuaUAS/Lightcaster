<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Background extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'file_path',
        'thumbnail_path',
    ];

    /**
     * Get the songs that use this background.
     */
    public function songs(): HasMany
    {
        return $this->hasMany(Song::class);
    }
}
