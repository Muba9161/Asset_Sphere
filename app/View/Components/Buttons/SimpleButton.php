<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleButton extends Component
{
    public $type;
    public $class;

    public function __construct($type = 'button', $class = 'btn btn-primary')
    {
        $this->type = $type;
        $this->class = $class;
    }

    public function render(): View|Closure|string
    {
        return view('components.buttons.simple-button');
    }
}
