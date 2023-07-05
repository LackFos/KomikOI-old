<?php
namespace App\Services;

use App\Models\Comic;
use App\Models\RecommendedComic;

class ComicService
{
    public function getRecommended()
    {
        return RecommendedComic::select('comic_id')
            ->with([
                'comic' => function ($query) {
                    $query->select('id', 'title', 'slug', 'image', 'description')
                        ->with('firstChapter');
                },
            ])->get(['comic_id']);
    }

    public function getTrending()
    {
        return Comic::select('title', 'slug', 'image')
            ->take(10)
            ->get();
    }

    public function getLatest()
    {
        return Comic::select('id', 'title', 'slug', 'image')
            ->with([
                'genres' => function ($query) {
                    $query->select('name', 'slug');
                },
                'latestChapter'
            ])
            ->latest('updated_at')
            ->take(10)
            ->get();
    }
}