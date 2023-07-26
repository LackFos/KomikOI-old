<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;

class KontenY extends Component
{
    /**
     * @param Collection|LengthAwarePaginator $comics, List of comics will be shown.
     * @param string $heading, Heading of GenreMenu <h2>.
     * @param string $superHeading, Heading of GenreMenu <h1>.
     * @param string $toPage, Link to archives page
     */
    public function __construct(
        public Collection|LengthAwarePaginator $comics,
        public string $heading = "",
        public string $superHeading = "",
        public string $toPage = ""
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.konten-y');
    }
}