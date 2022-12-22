<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\setStudentPayment;

class SetStudentPaymentCompoonent extends Component
{
    public $class;
    public $class_payment;
    public $daycare_payment;
    public $total_payment;

    public function render()
    {
        return view('livewire.admin.set-student-payment-compoonent')->layout('layout-common-student');
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
            'class' => 'required',
            'class_payment' => 'required|numeric',
            'daycare_payment' => 'required|numeric'
        ]);
    }

    public function setPayment()
    {
        try{

            setStudentPayment::create([

                'class' => $this->class,
                'class_payment' => $this->class_payment,
                'daycare_payment' => $this->daycare_payment
            ]);
            session()->flash('msg','Payment Set successfully for student');

        }catch(\Exception $e){
            session()->flash('msg',$e->getMessage());
        }
    }
}
