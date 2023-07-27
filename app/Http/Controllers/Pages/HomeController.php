<?php

namespace App\Http\Controllers\Pages;

use App\Models\Genre;
use App\Services\ComicService;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke(ComicService $comicService)
    {
        $recommendedComic = $comicService->getRecommended();
        $genres = Genre::all();
        $trendingComic = $comicService->getTrending();
        $latestComic = $comicService->getLatest();

        return view(
            'pages.home',
            compact(
                'recommendedComic',
                'trendingComic',
                'latestComic',
                'genres'
            )
        )
            ->with('metaTitle', 'KomikOI | Baca Komik Bahasa Indonesia')
            ->with('hasHeader', true)
            ->with('hasFooter', true);
    }
}