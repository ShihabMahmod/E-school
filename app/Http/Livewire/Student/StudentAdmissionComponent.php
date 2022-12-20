<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class StudentAdmissionComponent extends Component
{
    public function render()
    {
        return view('livewire.student.student-admission-component')->layout('layout-common-student');
    }
}
