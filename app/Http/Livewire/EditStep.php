<?php

namespace App\Http\Livewire;

use App\Models\Step;
use Livewire\Component;

class EditStep extends Component
{

    public $step = [];

    public function mount($step) {
        $this->step = $step->toArray();
    }

    public function increment() {
        // dd($this->step->count());
        $this->step[] = count($this->step);
    }

    public function decrement($idx) {
        // dd(gettype($this->step[$idx]));
        if(gettype($this->step[$idx]) !== "integer") {
            $step = $this->step[$idx];
            $stepDel = Step::find($step['id']);
            $stepDel->delete();
        }
        unset($this->step[$idx]);
    }

    public function render()
    {
        return view('livewire.edit-step');
    }
}
