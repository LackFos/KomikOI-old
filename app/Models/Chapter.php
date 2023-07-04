<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Chapter extends Model
{
    use HasFactory;
    use HasEagerLimit;

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }
}