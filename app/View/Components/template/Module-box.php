<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modulebox extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $subtitle;
    public $color;
        
    public function __construct($title, $subtitle, $color)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->color = $color;
    }
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.modulebox');
    }
}
