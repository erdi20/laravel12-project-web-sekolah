<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class navbar extends Component
{
    public $school;

    /**
     * Create a new component instance.
     */
    public function __construct($school)  // Menerima data school sebagai argumen konstruktor
    {
        $this->school = $school;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
