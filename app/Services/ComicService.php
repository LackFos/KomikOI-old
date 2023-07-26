<?php
namespace App\Services;

use App\Models\Comic;
use App\Models\RecommendedComic;

class ComicService
{
    public function getRecommended()
    {
        return RecommendedComic::with([
            'comic' => function ($query) {
                $query
                    ->select('id', 'title', 'slug', 'image', 'description')
                    ->with('firstChapter');
            },
        ])->get(['comic_id']);
    }

    public function getTrending()
    {
        return Comic::take(10)->get(['title', 'slug', 'image']);
    }

    public function getLatest()
    {
        return Comic::with(['genres', 'latestChapters'])
            ->take(10)
            ->latest('updated_at')
            ->get(['id', 'title', 'slug', 'image']);
    }

    public function getDetail($slug)
    {
        return Comic::where('slug', $slug)
            ->with([
                'genres',
                'type',
                'status',
                'chapters'
            ])->firstOrFail(['id', 'title', 'slug', 'author', 'image', 'description', 'status_id', 'type_id']);
    }
}