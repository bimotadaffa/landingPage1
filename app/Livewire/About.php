<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $halo = 'Hello livewire';
    public function render()
    {
        return view('livewire.about');
    }
}
