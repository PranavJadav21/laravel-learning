<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $subtitle;
    public $details;

    public function __construct($title, $subtitle, $details)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->details = $details;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }

    // Component Method
    public function addNumber($a){
        return $a + 20;
    }
}
