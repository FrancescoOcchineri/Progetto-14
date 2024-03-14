<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    public function progettos():HasMany
    {
        return $this->hasMany(Progetto::class);
    }
    
    use HasFactory;
}
