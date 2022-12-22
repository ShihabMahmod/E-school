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
          try{
            for($i = 0; $i < count($this->attendance); $i++)
            {
                if(!is_null($this->attendance[$i]) ){
                    
                    studentAttendance::create([
                        'student_id' => $this->attendance[$i],
                        'attendance' => true,
                        'lc' => false
                    ]);
                }elseif(!is_null($this->lc[$i])){
                    studentAttendance::create([
                        'student_id' => $this->attendance[$i],
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
