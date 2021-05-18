<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LoginForms extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $check;
     public $forgot;

    public function __construct($check,$forgot)
    {
        $this->check = $check;
        $this->forgot = $forgot;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.login-forms');
    }
}
