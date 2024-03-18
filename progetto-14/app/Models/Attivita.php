<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attivita extends Model
{

    protected $fillable = ['title', 'description', 'progetto_id', 'start_date', 'end_date', 'status'];
    public function progettos():BelongsTo
    {
        return $this->belongsTo(Progetto::class);
    }
    
    use HasFactory;
}
