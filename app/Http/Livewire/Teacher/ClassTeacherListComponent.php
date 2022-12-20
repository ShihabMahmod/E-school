<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\User;
use App\Models\class_teacher;

class ClassTeacherListComponent extends Component
{
    public function render()
    {
        return view('livewire.teacher.class-teacher-list-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $this->teacherList = class_teacher::join('Users','Users.roll',"=",'class_teachers.teacher_id')
                                                ->join('teachers','teachers.teacher_id',"=",'class_teachers.teacher_id')
                                                ->get();

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
