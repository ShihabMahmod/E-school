<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Subject;

class SubjectListComponent extends Component
{
    public $subjectList;

    public function render()
    {
        return view('livewire.admin.subject-list-component')->layout('layout-common-student');
    }
    public function mount()
    {
        try{

            $this->subjectList = Subject::all();

        }catch(\Exception $e){
            
            session()->flash('msg',$e->getMessage());
        }
    }
}
