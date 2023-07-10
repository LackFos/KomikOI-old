<?php

namespace App\Http\Controllers;

use App\Helpers\TimeAgoHelpers;
use App\Models\Comic;
use Carbon\Carbon;

class DetailController extends Controller
{
    public function __invoke($slug)
    {
        $comic = Comic::select('id', 'title', 'slug', 'author', 'image', 'description', 'status_id', 'type_id')->where('slug', $slug)->firstOrFail();
        $genres = $comic->genres()->select('name', 'slug')->get();
        $type = $comic->type()->select('name', 'slug')->first();
        $status = $comic->status()->select('name', 'slug')->first();
        $chapters = $comic->chapters()->select('slug', 'number', 'created_at')->get()->sortByDesc('number');
        $lastUpdate = isset($chapters[0]) ? $chapters[0]->created_at->format('d M Y') : null;

        return view(
            "pages.detail",
            compact(
                'comic',
                'genres',
                'type',
                'status',
                'lastUpdate',
                'chapters'
            )
        )->with('metaTitle', 'Detail Page');
    }
}