<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterComponent extends Component
{
    public $name;
    public $email;
    public $roll;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.student.register-component')->layout('layout-common-student');
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email|min:10|max:40|unique:users',
            'roll' => 'required|numeric',
            'password' => 'required|min:5|max:10|confirmed',
        ]);
    }

    public function signup()
    {
       try{

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'roll' => $this->roll,
            'password' =>bcrypt($this->password) 
        ]);
        session()->flash('msg','Your account is created!Now you can log in');
        return redirect()->to('/student-login');
       }catch(\Exception){

       }
    }
}
