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

    public function content()
    {
        return $this->hasMany(chapterImage::class)->select("page_number", "url");
    }

    public function prev()
    {
        return $this->belongsTo(self::class, 'comic_id', 'comic_id')
            ->select('slug')
            ->where('number', '<', $this->number)
            ->orderByDesc('number');
    }

    public function next()
    {
        return $this->belongsTo(self::class, 'comic_id', 'comic_id')
            ->select('slug')
            ->where('number', '>', $this->number)
            ->orderBy('number');
    }
}