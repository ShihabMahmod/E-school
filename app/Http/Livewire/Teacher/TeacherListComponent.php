<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\User;
use App\Models\teacher\teacher;

class TeacherListComponent extends Component
{
    public $teachersList;

    public function render()
    {
        return view('livewire.teacher.teacher-list-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $this->teacherList = teacher::join('Users','Users.roll',"=",'teachers.teacher_id')->get();

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }

}
