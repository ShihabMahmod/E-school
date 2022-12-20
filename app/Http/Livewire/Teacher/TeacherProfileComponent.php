<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\teacher\teacher;
use Session;
use Auth;

class TeacherProfileComponent extends Component
{
    public $name;
    public $email;
    public $address;
    public $phone;
    public $designation;
    public $sex;
    public $DOB;
    public $background;
    public $join_date;
    public $teacher_id;
    public $image;

    public $teacher_data;

    public function render()
    {
        return view('livewire.teacher.teacher-profile-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $teacher_email = Session::get('teacher_email');
            $teacher_name = Session::get('teacher_name');
            $teacher_roll = Session::get('teacher_roll');

            $teacher = teacher::where('teacher_id',$teacher_roll)->get()->first();

            $this->email = $teacher_email;
            $this->teacher_id = $teacher_roll;
            $this->name = $teacher_name;
            $this->address = $teacher->address;
            $this->phone = $teacher->phone;
            $this->designation = $teacher->designation;
            $this->sex = $teacher->sex;
            $this->DOB = $teacher->DOB;
            $this->background = $teacher->background;
            $this->join_date = $teacher->join_date;
            $this->image = $teacher->image;
            

        }catch(\Exception $e){

            session()->flash('msg',$e->getMessage());
        }
    }
    public function logout()
    {
        try{
            Session::forget('teacher_name');
            Session::forget('teacher_email');
            Session::flush();
            Auth::logout();
            return redirect('/');
    
            }catch(\Exception $e){
                session()->flash('msg',$e->getMessage());
            }
    }
}
