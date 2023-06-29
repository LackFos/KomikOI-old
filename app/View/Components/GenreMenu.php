<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GenreMenu extends Component
{
    /**
     * @param bool $heading, Title of GenreMenu.
     * @param bool $hasMoreButton,
     */
    public function __construct(
        public string $heading = "",
        public bool $hasMoreButton = false
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.genre-menu');
    }
}