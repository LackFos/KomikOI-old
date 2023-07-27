<?php

namespace App\Helpers;


class BreadcrumbHelpers
{
    private $breadcrumb;
    private $index = 0;

    public function __construct()
    {
        $this->breadcrumb = [];
    }

    public function add($value, $link = null)
    {
        $this->breadcrumb[$this->index] = (object) [
            'name' => $value,
            'link' => $link
        ];
        $this->index++;
    }

    public function get()
    {
        return $this->breadcrumb;
    }
}