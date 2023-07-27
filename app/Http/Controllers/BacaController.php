<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class BacaController extends Controller
{
    public function __invoke($slug)
    {
        $chapter = Chapter::select('id', 'comic_id', 'number')->where('slug', $slug)->firstOrFail();
        $comic = $chapter->comic()->select("title", "slug")->first();
        $contents = $chapter->content->sortBy("page_number");
        $prevChapter = $chapter->prev;
        $nextChapter = $chapter->next;
        $chapterTitle = $chapter->comic->title . ' Chapter ' . $chapter->number;

        return view(
            "Pages.baca",
            compact(
                'chapter',
                'comic',
                'contents',
                'prevChapter',
                'nextChapter',
                'chapterTitle',
            )
        )
            ->with("metaTitle", 'Komik ' . $chapterTitle . ' Bahasa Indonesia - KomikOI');
    }
}