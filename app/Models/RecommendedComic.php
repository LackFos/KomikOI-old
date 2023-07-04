<?php

namespace App\Models;

use App\Models\Comic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecommendedComic extends Model
{
    use HasFactory;

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }
}