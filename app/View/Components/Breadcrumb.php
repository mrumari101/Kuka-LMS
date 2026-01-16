<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public array $items;
    public ?string $title;

    public function __construct(array $items = [], string $title = null)
    {
        $this->items = $items;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.breadcrumb');
    }
}

