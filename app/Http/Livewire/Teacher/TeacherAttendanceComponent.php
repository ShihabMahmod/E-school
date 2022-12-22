<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\teacherAttendance;
use App\Models\teacher\teacher;
use Session;

class TeacherAttendanceComponent extends Component
{

    public $name;
    public $roll = [];
    public $attendance = [];
    public $lc = [];

    public function render()
    {
        $teacher_id = Session::get('teacher_roll');
        
        $teacher = teacher::join('Users','Users.roll',"=",'teachers.teacher_id')
                            ->where('roll',$teacher_id)
                            ->get();
        return view('livewire.teacher.teacher-attendance-component',['teachers'=>$teacher])->layout('layout-common-student');
    }
    public function saveAttendance()
    {
          try{
            for($i = 0; $i < count($this->attendance); $i++)
            {
                if(!is_null($this->attendance[$i]) ){
                    
                    teacherAttendance::create([
                        'teacher_id' => $this->attendance[$i],
                        'attendance' => true,
                        'lc' => false
                    ]);
                }elseif(!is_null($this->lc[$i])){
                    teacherAttendance::create([
                        'teacher_id' => $this->attendance[$i],
                        'attendance' => false,
                        'lc' => true
                    ]);
                }elseif(!is_null($this->lc[$i]) && !is_null($this->attendance[$i])){
                    session()->flash('msg','Please check only one field');
                }
            }
            return redirect()->back();
          }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
          }
        
    }
}
