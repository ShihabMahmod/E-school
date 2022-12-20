<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\admin;
use Session;

class AdminLoginComponent extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.admin.admin-login-component')->layout('layout-admin');
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
            'email' => 'required|min:3|max:30|email',
            'password' => 'required|min:5|max:10'
        ]);
    }
    public function adminLogin()
    {
        try{
            $admin = new admin();
            $data = $admin::where('email',$this->email)->get()->first();
            if($data && $data->password == $this->password){
                Session::put('admin_email',$this->email);
                Session::put('admin_name',$data->name);
                return redirect('/');
            }
            
        }catch(\Exception $e){

        }
    }
}
