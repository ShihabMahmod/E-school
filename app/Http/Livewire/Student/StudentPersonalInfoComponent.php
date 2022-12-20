<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\student;
use Session;

class StudentPersonalInfoComponent extends Component
{
    public $student_roll;
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
        return view('livewire.student.student-personal-info-component')->layout('layout-common-student');
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
            'class' => 'required',
            'DOB' =>'required',
            'sex' => 'required',
            'phone' => 'required|max:11|min:11',
            'guardian_name' => 'required',
            'join_class' => 'required'
        ]);
    }
    public function saveStudentInfo()
    {
        try{
            $roll = Session::get('student_roll');
            student::insert([
                'roll' => $roll,
                'class' => $this->class,
                'DOB' => $this->DOB,
                'sex' => $this->sex,
                'address' => $this->address,
                'phone' => $this->phone,
                'guardian_name' => $this->guardian_name,
                'join_class' => $this->join_class
                //'image' => $this->image->store('images')
            ]);
            return redirect()->to('/student-profile');
        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
