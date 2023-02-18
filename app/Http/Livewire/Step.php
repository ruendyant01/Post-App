<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{

    public $step = [];
    public function increment() {
        $this->step[] = count($this->step);
    }

    public function decrement($idx) {
        unset($this->step[$idx]);
    }
    public function render()
    {
        return view('livewire.step');
    }
}
