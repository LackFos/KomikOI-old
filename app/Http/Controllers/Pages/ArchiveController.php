<?php

namespace App\Http\Controllers\Pages;

use App\Models\Type;
use App\Models\Genre;
use App\Helpers\BreadcrumbHelpers;
use App\Helpers\PaginationHelpers;
use App\Http\Controllers\Controller;

class ArchiveController extends Controller
{
    public function byGenre(BreadcrumbHelpers $breadcrumb, $slug)
    {
        $genre = Genre::where('slug', $slug)->firstOrFail();
        $genres = Genre::all();

        $comics = $genre->comics()->with(['genres', 'latestChapters'])->select(['comics.id', 'title', 'slug', 'image'])->paginate(16);
        $paginator = new PaginationHelpers($comics);

        $heading = "Komik " . $genre->name;
        $breadcrumb->add("Genre");
        $breadcrumb->add($genre->name);
        $breadcrumb = $breadcrumb->get();

        return view(
            "pages.archive",
            compact(
                'breadcrumb',
                'heading',
                'comics',
                'paginator',
                'genres'
            )
        )->with('metaTitle', 'Komik ' . $genre->name . ' - KomikOI');
    }

    public function byType(BreadcrumbHelpers $breadcrumb, $slug)
    {
        $type = Type::where('slug', $slug)->firstOrFail();
        $genres = Genre::all();

        $comics = $type->comics()->with(['genres', 'latestChapters'])->select(['comics.id', 'title', 'slug', 'image'])->paginate(16);
        $paginator = new PaginationHelpers($comics);

        $heading = "Komik " . $type->name;
        $breadcrumb->add("Tipe");
        $breadcrumb->add($type->name);
        $breadcrumb = $breadcrumb->get();

        return view(
            "pages.archive",
            compact(
                'breadcrumb',
                'heading',
                'comics',
                'paginator',
                'genres'
            )
        )->with('metaTitle', 'Komik ' . $type->name . ' - KomikOI');
    }
}