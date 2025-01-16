<?php

namespace App\View\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownField extends Component
{
    public $label;
    public $name;
    public $id;
    public $options;
    public $class;
    public $selected;

    public function __construct($label, $name, $id = null, $options = [], $class = 'col-xl-12 mb-3', $selected = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->options = $options;
        $this->class = $class;
        $this->selected = $selected;
    }

    public function render(): View|Closure|string
    {
        return view('components.inputs.dropdown-field');
    }
}
