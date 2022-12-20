<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\User;
use App\Models\student;

class StudentListComponent extends Component
{
    public $name;
    public $email;
    public $class;
    public $roll;
    public $guardian_name;
    public $phone;

    public $student;

    public function render()
    {
        return view('livewire.student.student-list-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $this->student = student::join('Users','Users.roll',"=",'studets.roll')->get();

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
