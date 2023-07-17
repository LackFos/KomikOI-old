<?php

namespace App\Http\Controllers;

use App\Helpers\BookmarkHelpers;

class BookmarkController extends Controller
{
    private $cookieExpired = 60 * 24 * 365;

    public function create($id)
    {
        $bookmarks = new BookmarkHelpers();
        $comicExists = $bookmarks->findComic($id);

        if ($comicExists) {
            return response(['message' => 'Komik ' . $id . ' sudah ada di Bookmark']);
        } else {
            $comicData = ['lastChapter' => ''];
            $bookmarks->addComic($id, $comicData);
            return response(['message' => 'Komik ' . $id . ' berhasil ditambahkan ke Bookmark'])->cookie('bookmarks', $bookmarks->getJson(), $this->cookieExpired);
        }
    }

    public function delete($id)
    {
        $bookmarks = new BookmarkHelpers();
        $comicExists = $bookmarks->findComic($id);

        if (!$comicExists) {
            return response(['message' => 'Komik ' . $id . ' tidak ada di Bookmark']);
        } else {
            $bookmarks->deleteComic($id);
            return response(['message' => 'Komik ' . $id . ' berhasil dihapus dari Bookmark'])->cookie('bookmarks', $bookmarks->getJson());
        }
    }
}