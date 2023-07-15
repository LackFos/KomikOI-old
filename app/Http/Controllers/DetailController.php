<?php

namespace App\Http\Controllers;

use App\Helpers\BookmarkHelpers;
use App\Models\Comic;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __invoke(Request $request, $slug)
    {
        $comic = Comic::select('id', 'title', 'slug', 'author', 'image', 'description', 'status_id', 'type_id')->where('slug', $slug)->firstOrFail();
        $genres = $comic->genres()->select('name', 'slug')->get();
        $type = $comic->type()->select('name', 'slug')->first();
        $status = $comic->status()->select('name', 'slug')->first();
        $chapters = $comic->chapters()->select('slug', 'number', 'created_at')->get()->sortByDesc('number');

        $lastUpdate = isset($chapters[0])
            ? $chapters[0]->created_at->format('d M Y')
            : null;

        $bookmark = new BookmarkHelpers();
        $bookmarked = $bookmark->findComic($comic->id);

        return view(
            "pages.detail",
            compact(
                'comic',
                'genres',
                'type',
                'status',
                'lastUpdate',
                'chapters',
                'bookmarked'
            )
        )->with('metaTitle', 'Komik ' . $comic->title . ' Bahasa Indonesia - KomikOI');
    }
}