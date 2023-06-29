<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Slideshow extends Component
{

    public function __construct(
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.slideshow');
    }
}