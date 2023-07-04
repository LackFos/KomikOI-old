<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class GenreMenu extends Component
{
    /**
     * @param Collection $genres, List of genres will be shown.
     * @param bool $heading, Title of GenreMenu.
     * @param bool $hasMoreButton,
     */
    public function __construct(
        public Collection $genres,
        public bool $heading = false,
        public bool $hasMoreButton = false
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.genre-menu');
    }
}