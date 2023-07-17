<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class ChapterBox extends Component
{
    /**
     * @param Collection $chapters, List of comics will be shown.
     * @param string $title, comic title will be shown.
     */
    public function __construct(
        public collection $chapters,
        public string $title
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chapter-box');
    }
}