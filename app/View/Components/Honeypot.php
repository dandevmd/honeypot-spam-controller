<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Honeypot extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.honeypot', [
            'field_name' => config('honeypot.field_name'),
            'fill_time' => config('honeypot.fill_time'),
            'time_limit' => config('honeypot.time_limit')
        ]);

    }
}