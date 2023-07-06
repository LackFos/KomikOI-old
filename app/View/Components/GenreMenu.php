<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

class GenreMenu extends Component
{
    /**
     * @param Collection|SupportCollection $genres, List of genres will be shown.
     * @param bool $heading, Title of GenreMenu.
     * @param bool $hasCategory, 
     * @param bool $hasMoreButton,
     */
    public function __construct(
        public Collection|SupportCollection $genres,
        public bool $heading = false,
        public bool $hasCategory = false,
        public bool $hasMoreButton = false
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.genre-menu');
    }
}