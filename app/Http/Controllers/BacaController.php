<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Helpers\BreadcrumbHelpers;

class BacaController extends Controller
{
    private $breadcrumb;

    public function __construct(BreadcrumbHelpers $breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }

    public function __invoke($slug)
    {
        $chapter = Chapter::where('slug', $slug)->firstOrFail(['id', 'comic_id', 'number']);
        $comic = $chapter->comic()->first(['title', 'slug']);
        $contents = $chapter->content->sortBy("page_number");

        $chapterTitle = $comic->title . ' Chapter ' . $chapter->number;

        $this->breadcrumb->add($comic->title, '/detail/' . $comic->slug);
        $this->breadcrumb->add($chapterTitle);
        $breadcrumb = $this->breadcrumb->get();

        return view(
            "Pages.baca",
            compact(
                'breadcrumb',
                'chapterTitle',
                'chapter',
                'comic',
                'contents'
            )
        )->with("metaTitle", 'Komik ' . $chapterTitle . ' Bahasa Indonesia - KomikOI');
    }
}