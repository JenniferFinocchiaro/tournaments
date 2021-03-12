<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextField extends Component
{

    public $name;
    public $label;
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $icon = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.text-field');
    }
}
