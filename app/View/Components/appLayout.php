<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class appLayout extends Component
{
    /**
     * Create a new component instance.
     */

    public string $title;
    public function __construct($title = "Dealer Dam Tidore")
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app-layout');
    }
}
