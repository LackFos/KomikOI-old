<?php

namespace App\Helpers;

class PaginationHelpers
{
    public
    $currentPage,
    $onFirstPage,
    $prevPage,
    $urls,
    $nextPage,
    $lastPage,
    $onLastPage;

    public function __construct($paginator)
    {
        // Ambil halaman saat ini dan halaman terakhir
        $this->currentPage = $paginator->currentPage();
        $this->lastPage = $paginator->lastPage();

        // Generate URL untuk tautan paginasi
        $halamanMin = max(1, $this->currentPage - 2);
        $halamanMax = min($this->lastPage, $this->currentPage + 2);
        $this->urls = range($halamanMin, $halamanMax);

        // Periksa apakah kita berada di halaman pertama atau halaman terakhir
        $this->onFirstPage = $paginator->onFirstPage();
        $this->onLastPage = $paginator->onLastPage();

        // Ambil URL halaman sebelumnya dan halaman berikutnya
        $this->prevPage = $paginator->previousPageUrl();
        $this->nextPage = $paginator->nextPageUrl();
    }

    public function links()
    {
        return view('components.pagination')
            ->with('currentPage', $this->currentPage)
            ->with('onFirstPage', $this->onFirstPage)
            ->with('prevPage', $this->prevPage)
            ->with('urls', $this->urls)
            ->with('nextPage', $this->nextPage)
            ->with('lastPage', $this->lastPage)
            ->with('onLastPage', $this->onLastPage);
    }
}