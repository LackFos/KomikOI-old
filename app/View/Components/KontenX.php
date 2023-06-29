<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class KontenX extends Component
{
    /**
     * @param string $heading, Title of the KontenX.
     * @param string $swiper, Unique class for swiper selector.
     */
    public function __construct(
        public string $swiper,
        public string $heading
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.konten-x');
    }
}