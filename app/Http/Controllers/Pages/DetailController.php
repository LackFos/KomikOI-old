<?php

namespace App\Http\Controllers\Pages;

use App\Models\Comic;
use App\Helpers\BookmarkHelpers;
use App\Helpers\BreadcrumbHelpers;
use App\Http\Controllers\Controller;
use App\Services\ComicService;

class DetailController extends Controller
{
    public function __invoke(BreadcrumbHelpers $breadcrumb, BookmarkHelpers $bookmark, ComicService $comicService, $slug)
    {
        $comic = $comicService->getDetail($slug);

        $chapters = $comic->chapters->sortByDesc('number');
        $lastUpdate = $chapters->first()?->created_at->format('d M Y');

        $breadcrumb->add($comic->title);
        $breadcrumb = $breadcrumb->get();
        $bookmarked = $bookmark->findComic($comic->id);
        return view(
            "pages.detail",
            compact(
                'breadcrumb',
                'comic',
                'bookmarked',
                'lastUpdate',
                'chapters'
            )
        )->with('metaTitle', 'Komik ' . $comic->title . ' Bahasa Indonesia - KomikOI');
    }
}