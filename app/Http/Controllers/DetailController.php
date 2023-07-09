<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __invoke($slug)
    {
        $comic = Comic::select('id', 'title', 'slug', 'author', 'image', 'description', 'status_id', 'type_id')->firstOrFail();
        $genres = $comic->genres()->select('name', 'slug')->get();
        $type = $comic->type()->select('name', 'slug')->first();
        $status = $comic->status()->select('name', 'slug')->first();
        $chapters = $comic->chapters()->select('slug', 'number', 'created_at')->get()->sortByDesc('number');

        return view(
            "pages.detail",
            compact(
                'comic',
                'genres',
                'type',
                'status',
                'chapters'
            )
        )->with('metaTitle', 'Detail Page');
    }
}