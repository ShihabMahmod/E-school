<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\teacher\teacher;
use App\Models\teacherAttendance;

class ApproveTeacherAttendance extends Component
{
    public $is_approved = [];

    public function render()
    {
        $teacherList = teacherAttendance::join('teachers','teachers.teacher_id',"=",'teacher_attendance.teacher_id')
                                        ->join('Users','Users.roll',"=",'teacher_attendance.teacher_id')
                                        ->where('is_approved',0)
                                        ->get(['Users.name','Users.roll','teacher_attendance.created_at']);

        return view('livewire.teacher.approve-teacher-attendance',['teacher_list'=>$teacherList])->layout('layout-common-student');
    }
    public function approved()
    {
        try{

        for($i=0; $i<count($this->is_approved); $i++){

            teacherAttendance::where('teacher_id',$this->is_approved[$i])->update(['is_approved'=>1]);
    }
        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
