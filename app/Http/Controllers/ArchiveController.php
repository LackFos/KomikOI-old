<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Helpers\BreadcrumbHelpers;

class ArchiveController extends Controller
{
    private $breadcrumb;

    public function __construct(BreadcrumbHelpers $breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }

    public function byGenre($slug)
    {
        $genre = Genre::where('slug', $slug)->firstOrFail();
        $genres = Genre::all();

        $comics = $genre->comics()->with(['genres', 'latestChapters'])->get(['comics.id', 'title', 'slug', 'image']);

        $heading = "Komik " . $genre->name;
        $this->breadcrumb->add("Genre");
        $this->breadcrumb->add($genre->name);
        $breadcrumb = $this->breadcrumb->get();

        return view(
            "pages.archive",
            compact(
                'breadcrumb',
                'heading',
                'comics',
                'genres'
            )
        )->with('metaTitle', 'Komik ' . $genre->name . ' - KomikOI');
    }
}