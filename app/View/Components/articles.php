<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class articles extends Component
{
    
    public $src;
    public $title;

    public function __construct($src,$title)
    {
        $this->src = $src;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles');
    }
}
