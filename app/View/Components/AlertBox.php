<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $class;
    public $icon;
    public function __construct($type)
    {
        switch ($type) {
            case 'success':
                $this->class = "success";
                $this->icon = "flaticon-like";
                break;
            case 'error':
                $this->class = "danger";
                $this->icon = "flaticon-warning";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert-box');
    }
}
