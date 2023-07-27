<?php

namespace App\Http\Controllers\Pages;

use App\Models\Chapter;
use App\Helpers\BreadcrumbHelpers;
use App\Http\Controllers\Controller;

class BacaController extends Controller
{
    public function __invoke(BreadcrumbHelpers $breadcrumb, $slug)
    {
        $chapter = Chapter::where('slug', $slug)->firstOrFail(['id', 'comic_id', 'number']);
        $comic = $chapter->comic()->first(['title', 'slug']);
        $contents = $chapter->content->sortBy("page_number");

        $heading = $comic->title . ' Chapter ' . $chapter->number;
        $breadcrumb->add($comic->title, '/detail/' . $comic->slug);
        $breadcrumb->add($heading);
        $breadcrumb = $breadcrumb->get();

        return view(
            "Pages.baca",
            compact(
                'breadcrumb',
                'heading',
                'chapter',
                'comic',
                'contents'
            )
        )->with("metaTitle", 'Komik ' . $heading . ' Bahasa Indonesia - KomikOI');
    }
}