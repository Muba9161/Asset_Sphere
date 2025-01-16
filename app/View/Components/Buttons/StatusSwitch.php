<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusSwitch extends Component
{
    public $entityType;
    public $entityId;
    public $status;
    public $ajaxUrl;

    public function __construct($entityType, $entityId, $status, $ajaxUrl)
    {
        $this->entityType = $entityType;
        $this->entityId = $entityId;
        $this->status = $status;
        $this->ajaxUrl = $ajaxUrl;
    }

    public function render(): View|Closure|string
    {
        return view('components.buttons.status-switch');
    }
}
