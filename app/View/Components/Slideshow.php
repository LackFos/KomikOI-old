<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Slideshow extends Component
{
    /**
     * @param string $swiper, Unique class for swiper selector.
     */
    public function __construct(
        public string $swiper,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.slideshow');
    }
}