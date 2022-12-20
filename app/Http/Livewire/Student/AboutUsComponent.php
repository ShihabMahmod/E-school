<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class AboutUsComponent extends Component
{
    public function render()
    {
        return view('livewire.student.about-us-component')->layout('layout-common-student');
    }
}
