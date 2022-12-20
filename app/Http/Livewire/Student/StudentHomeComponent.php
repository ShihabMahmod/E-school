<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class StudentHomeComponent extends Component
{
    public function render()
    {
        return view('livewire.student.student-home-component')->layout('layout-common');
    }
}
