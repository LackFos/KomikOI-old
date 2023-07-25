<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Helpers\BookmarkHelpers;
use App\Helpers\BreadcrumbHelpers;

class DetailController extends Controller
{
    private $breadcrumb;
    private $bookmark;

    public function __construct(BookmarkHelpers $bookmark, BreadcrumbHelpers $breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        $this->bookmark = $bookmark;
    }

    public function __invoke($slug)
    {
        $comic = Comic::where('slug', $slug)
            ->with([
                'genres',
                'type',
                'status'
            ])->firstOrFail(['id', 'title', 'slug', 'author', 'image', 'description', 'status_id', 'type_id']);

        $chapters = $comic->chapters()->get(['slug', 'number', 'created_at'])->sortByDesc('number');
        $lastUpdate = $chapters->isEmpty() ? null : $chapters->first()->created_at->format('d M Y');

        $this->breadcrumb->add($comic->title);
        $breadcrumb = $this->breadcrumb->get();
        $bookmarked = $this->bookmark->findComic($comic->id);

        return view(
            "pages.detail",
            compact(
                'comic',
                'lastUpdate',
                'chapters',
                'bookmarked',
                'breadcrumb'
            )
        )->with('metaTitle', 'Komik ' . $comic->title . ' Bahasa Indonesia - KomikOI');
    }
}