<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\student;
use Session;
use Auth;
use Artisan;

class StudentProfileComponent extends Component
{
    public $student;
    public $roll;
    public $class;
    public $DOB;
    public $sex;
    public $address;
    public $phone;
    public $guardian_name;
    public $join_class;
    public $image;

    public function render()
    {
        return view('livewire.student.student-profile-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $roll = Session::get('student_roll');
            $student  = student::where('roll',$roll)->get()->first();

            $this->roll = $student->roll;
            $this->class = $student->class;
            $this->DOB = $student->DOB;
            $this->sex = $student->sex;
            $this->address = $student->address;
            $this->phone = $student->phone;
            $this->guardian_name = $student->guardian_name;


        }catch(\Exception $e){

        }
    }
    public function routin()
    {
        
    }
    public function logout()
    {
        try{
            Session::flush();
            Auth::logout();
            Artisan::call('cache:clear');
            return redirect('/');

            }catch(\Exception $e){
                session()->flash('msg',$e->getMessage());
            }
    }
}
