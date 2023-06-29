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
     * @param string $heading, Heading of GenreMenu <h2>.
     * @param string $superHeading, Heading of GenreMenu <h1>.
     * @param string $toPage, Link to archives page
     */
    public function __construct(
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