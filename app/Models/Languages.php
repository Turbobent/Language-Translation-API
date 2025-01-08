<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name', 'code'];

    // Relationships
    public function translationsAsSource()
    {
        return $this->hasMany(Translation::class, 'source_language_id');
    }

    public function translationsAsTarget()
    {
        return $this->hasMany(Translation::class, 'target_language_id');
    }
}

