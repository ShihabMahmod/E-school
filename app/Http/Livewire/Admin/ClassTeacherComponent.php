<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\teacher\teacher;
use App\Models\User;
use App\Models\class_teacher;

class ClassTeacherComponent extends Component
{
    public $class;
    public $teacher_id;

    public $teacherList;

    public function render()
    {
        return view('livewire.admin.class-teacher-component')->layout('layout-common-student');
    }
    public function mount()
    {
            try{

                $this->teacherList = teacher::join('Users','Users.roll',"=",'teachers.teacher_id')->get()->all();

            }catch(\Exception $e){
                session()->flash('msg',$e->getMessage());
            }
    }
    public function saveClassTeacher()
    {
        try{
            class_teacher::create([

                'teacher_id' => $this->teacher_id,
                'class' => $this->class
            ]);
            session()->flash('msg','Assinign class teacher successfully');

        }catch(\Exception $e){

            session()->flash('msg',$e->getMessage());
        }
    }
}
