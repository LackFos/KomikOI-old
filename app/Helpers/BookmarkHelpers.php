<?php

namespace App\Helpers;


class BookmarkHelpers
{
    private $bookmarks;

    public function __construct()
    {
        $this->bookmarks = json_decode(request()->cookie('bookmarks'), true) ?? [];
    }

    public function getJson()
    {
        return json_encode($this->bookmarks);
    }

    public function addComic($id, $data)
    {
        $this->bookmarks[$id] = $data;
    }

    public function deleteComic($id)
    {
        unset($this->bookmarks[$id]);
    }

    public function findComic($id)
    {
        return array_key_exists($id, $this->bookmarks);
    }
}