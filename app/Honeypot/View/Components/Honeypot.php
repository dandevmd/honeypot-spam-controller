<?php

namespace App\Honeypot\View\Components;

use Illuminate\View\Component;

class Honeypot extends Component
{

    public function render()
    {
        $config = config('honeypot');
        $field_name = $config['field_name'];
        $fill_time = $config['fill_time'];
        $microtime = microtime(true);
        $visibility = $config['visible'];

        return <<<blade
                    <div class="$visibility">
                        <input type="text" name="$field_name" id="$field_name">
                        <input type="text" name="$fill_time" id="$fill_time" value="$microtime">
                    </div>
                    blade;

    }
}