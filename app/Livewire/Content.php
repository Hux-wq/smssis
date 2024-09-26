<?php

namespace App\Livewire;

use Livewire\Component;

class Content extends Component
{
    public $currentComponent = 'dashboard';

    public function setComponent($componentName)
    {
        $this->currentComponent = $componentName;
    }
    public function render()
    {
        return view('livewire.content');
    }
}
