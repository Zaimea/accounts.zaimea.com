<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $layout
     * @param string|null $title
     * @param string|null $description
     */
    public function __construct(
        public string $layout,
        public ?string $title = null,
        public ?string $description = null,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view("layouts.{$this->layout}");
    }
}
