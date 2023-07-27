<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comic extends Model
{
    use HasFactory;
    use HasEagerLimit;
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function firstChapter()
    {
        return $this->hasOne(Chapter::class)
            ->select('comic_id', DB::raw('MIN(slug) as slug'))
            ->groupBy('comic_id');
    }

    public function latestChapters()
    {
        return $this->hasMany(Chapter::class)
            ->select('comic_id', 'number', 'slug')
            ->orderByDesc('number')
            ->limit(3);
    }
}