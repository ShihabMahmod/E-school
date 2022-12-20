<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\classes;
use App\Models\teacher\teacher;
use App\Models\subject;


class SubjectComponent extends Component
{
    public $name;
    public $class_name;
    public $assigning_teacher_name;
    public $class_time;
    public $is_group_subject;

    public $teacherList;

    public function render()
    {
        return view('livewire.admin.subject-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $this->teacherList = teacher::join('Users','Users.roll',"=",'teachers.teacher_id')->get()->all();

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
            'name' => 'required|min:3|max:30',
            'class_name' => 'required',
            'assigning_teacher_name' => 'required',
            'class_time' => 'required',
            'is_group_subject' => 'required'

        ]);
    }
    public function saveSubject()
    {
        try{

            subject::create([
                'name' => $this->name,
                'class_name' => $this->class_name,
                'assigning_teacher_name' => $this->assigning_teacher_name,
                'class_time' => $this->class_time,
                'is_group_subject' => $this->is_group_subject
            ]);
            session()->flash('msg','Subject added successfully');

        }catch(\Exception $e){

            session()->flash('msg',$e->getMessage());
        }
    }
}
