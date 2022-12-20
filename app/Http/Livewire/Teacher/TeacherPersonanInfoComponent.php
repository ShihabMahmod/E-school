<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\teacher\teacher;
use Session;

class TeacherPersonanInfoComponent extends Component
{
    public $designation;
    public $DOB;
    public $sex;
    public $phone;
    public $address;
    public $join_date;
    public $background;
    public $image;

    public function render()
    {
        return view('livewire.teacher.teacher-personan-info-component')->layout('layout-common-student');
    }
    public function updated($field)
    {
        // $this->validate($field,[
        //     'designation' => 'required',
        //     'DOB' => 'required',
        //     'sex' => 'required',
        //     'phone' => 'required|max:11|min:11',
        //     'address' => 'required|min:10|max:50',
        //     'join_date' => 'required',
        //     'backgroound' => 'required',
        // ]);
    }

    public function saveTeacherInfo()
    {
        try{
            $teacher_id = Session::get('teacher_roll');
            teacher::create([
                'teacher_id' => $teacher_id,
                'designation' => $this->designation,
                'DOB' => $this->DOB,
                'sex' => $this->sex,
                'phone' => $this->phone,
                'address' => $this->address,
                'join_date' => $this->join_date,
                'background' => $this->background,
                'image' => $this->image
            ]);
            session()->flash('msg','Save your inafomation sussessfully');
            return redirect()->to('/teacher-profile');

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
