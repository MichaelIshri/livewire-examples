<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Neon extends Component
{
    public $isSwitchedOn = false;
    public $uri;

    public function __construct()
    {
        $this->switch();
    }

    public function switch()
    {
        $uris = [
            true => url('/img/livewire-purple.png'),
            false => url('/img/livewire-dark.png'),
        ];

        $this->uri = $uris[$this->isSwitchedOn];
        $this->isSwitchedOn = !$this->isSwitchedOn;
    }

    public function render()
    {
        return view('livewire.neon');
    }
}
