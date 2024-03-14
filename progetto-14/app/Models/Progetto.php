<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Progetto extends Model
{
    public function ambientes(): BelongsTo
    {
        return $this->belongsTo(Ambiente::class, 'environment_id');
    }
    
    public function languages(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
    
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'team_id');
    }

    public function attivitas():HasMany
    {
        return $this->hasMany(Attivita::class);
    }
    
    use HasFactory;
}
