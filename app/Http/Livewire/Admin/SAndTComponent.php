<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class SAndTComponent extends Component
{
    public $name;
    public $email;
    public $roll;
    public $is_teacher;

    public $data;

    public function render()
    {
        return view('livewire.admin.s-and-t-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $user = new User();
            $this->data = $user->where('varified_by_admin',0)->get()->all();

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
    public function studentRoule($id)
    {
        try{
            $user = new User();
            $student = $user->where('id',$id)->update(['varified_by_admin'=>1]);
            session()->flash('msg','Student Rules given by admin');

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
    public function teacherRoule($id)
    {
        try{
            $user = new User();
            $teacher = $user->where('id',$id)->update(['varified_by_admin'=>1,'is_teacher'=>1]);
            session()->flash('msg','Teacher Rules given by admin');

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
    public function hydrate()
    {
        $this->mount();
    }
}
