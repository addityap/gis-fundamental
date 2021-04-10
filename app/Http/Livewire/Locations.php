<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Locations extends Component
{
    public $long,$lat;

    public function render()
    {
        return view('livewire.locations');
    }
}
