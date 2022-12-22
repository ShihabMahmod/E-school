<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\studentAttendance;
use App\Models\student;

class StudentAttendanceComponent extends Component
{
    public $name;
    public $roll = [];
    public $attendance = [];
    public $lc = [];


    public function render()
    {
        $student = student::join('Users','Users.roll',"=",'studets.roll')->get();
        return view('livewire.student.student-attendance-component',['student'=>$student])->layout('layout-common-student');
    }
    
    public function saveAttendance()
    {
            for($i = 0; $i < count($this->attendance); $i++)
            {
                studentAttendance::create([
                    'student_id' => $this->attendance[$i],
                    'attendance' => 1,
                    'lc' => 0
                ]);
            }
        
    }
}
