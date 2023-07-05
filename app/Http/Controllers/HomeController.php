<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Services\ComicService;

class HomeController extends Controller
{
    private $comicService;

    public function __construct(ComicService $comicService)
    {
        $this->comicService = $comicService;
    }

    public function __invoke()
    {
        $recommendedComic = $this->comicService->getRecommended();
        $genres = Genre::getGenres();
        $trendingComic = $this->comicService->getTrending();
        $latestComic = $this->comicService->getLatest();

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