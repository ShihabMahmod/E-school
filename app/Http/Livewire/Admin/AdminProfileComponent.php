<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\admin\admin;
use Session;
use Auth;

class AdminProfileComponent extends Component
{
    public $phone;
    public $email;
    public $image;
    public $address;
    public $name;

    public function render()
    {
        return view('livewire.admin.admin-profile-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{
            $admin_email = Session::get('admin_email');
            $data = admin::where('email',$admin_email)->get()->first();

            $this->name = $data->name;
            $this->phone = $data->phone;
            $this->email = $admin_email;
            $this->image = $data->image;
            $this->address = $data->address;
            

        }catch(\Exception $e){

        }
    }
    public function logout()
    {
        try{
        Session::forget('admin_name');
        Session::forget('admin_email');
        Session::flush();
        Auth::logout();
        return redirect('/');

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
