<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\teacher\teacher;
use App\Models\setPayment;

class PaymentSetComponent extends Component
{
    public $teacher_name;
    public $designation;
    public $phone;
    public $teacher_id;
    public $amount;
    public $employee_data = null;
    public $select_data = null;

    public function render()
    {
        return view('livewire.admin.payment-set-component')->layout('layout-common-student');
    }

    public function mount()
    {
        try{

            $this->employee_data = teacher::join('Users','Users.roll',"=",'teachers.teacher_id')->get();


        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
        
    }
    public function updated($teacher_id){
        

        if(!is_null($teacher_id)){
            try{
                $this->select_data = teacher::join('Users','Users.roll',"=",'teachers.teacher_id')
                                 ->where('teachers.teacher_id',$this->teacher_id)
                                 ->get(); 
                                                                            

       }catch(\Exception $e){
           session()->flash('msg',$e->getMessage());
       }
        }
        $this->mount();
    }
    public function setPayment()
    {
        try{
            setPayment::create([
                'employee_id' => $this->teacher_id,
                'employee_name' => $this->teacher_name,
                'designation' => $this->designation,
                'phone' => $this->phone,
                'amount' => $this->amount
            ]);
            session()->flash('msg','Set payment status for this teacher');

        }catch(\Exception $e){

            session()->flash('msg',$e->getMessage());
        }
    }
}
