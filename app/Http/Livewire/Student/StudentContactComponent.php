<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class StudentContactComponent extends Component
{
    public function render()
    {
        return view('livewire.student.student-contact-component')->layout('layout-common-student');
    }
}
