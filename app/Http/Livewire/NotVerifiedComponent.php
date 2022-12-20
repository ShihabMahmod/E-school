<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotVerifiedComponent extends Component
{
    public function render()
    {
        return view('livewire.not-verified-component')->layout('layout-common-student');
    }
}
