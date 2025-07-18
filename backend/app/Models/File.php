<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;
    // Owner of the file
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
