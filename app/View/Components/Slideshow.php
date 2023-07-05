<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class Slideshow extends Component
{
    /**
     * @param Collection $comics, List of comics will be shown.
     * @param string $swiper, Unique class for swiper selector.
     */
    public function __construct(
        public Collection $comics,
        public string $swiper,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.slideshow');
    }
}