<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }

    public static function getGenres()
    {
        return self::select(['name', 'slug'])->get();
    }
}