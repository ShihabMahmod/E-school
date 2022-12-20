<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Session;

class StudentLoginComponent extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.student.student-login-component')->layout('layout-common-student');
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
    }
    public function login()
    {
        try{

            $studentCredential = [
                'email'=>$this->email,
                'password' => $this->password,
            ];
            
            if(Auth::attempt($studentCredential) && Auth::User()->varified_by_admin == 1 )
            {
               if(Auth::User()->is_teacher == 1){

                Session::put('teacher_email',$this->email);
                Session::put('teacher_name',Auth::User()->name);
                Session::put('teacher_roll',Auth::User()->roll);
                Session::put('teacher',true);
                return redirect()->to('/');

               }else{
                
                Session::put('student_email',$this->email);
                Session::put('student_name',Auth::User()->name);
                Session::put('student_roll',Auth::User()->roll);
                Session::put('student',true);

                return redirect()->to('/');
               }
            }
            elseif(Auth::attempt($studentCredential) && Auth::User()->varified_by_admin == 0){
                
                return redirect()->to('/not-verified-component');
            }
            else{
                session()->flash('msg','Please provide valid information');
            }

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
