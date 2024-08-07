<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commissions_Conseil;
use App\Models\Members;
use App\Models\ComCons_Member;

class ComConsGestion extends Component
{
    public $view_type;
    public $com_cons;
    
    public $selectedComConId = null;
    public $selectedComCon = null;
    public $com_cons_members = [];

    public function selectComCon($id)
    {
        $this->selectedComConId = $id;
        $this->selectedComCon = Commissions_Conseil::find($id);
        $this->com_cons_members = Members::whereIn('id', ComCons_Member::where('com_cons_id', $id)->pluck('member_id'))->get();
    }

    public function mount($view_type = 'user_view')
    {
        $this->com_cons = Commissions_Conseil::all();
        $this->view_type = $view_type; 
    }

    public function redirectToAddMember()
{
    return redirect()->route('member-selection', ['com_con_id' => $this->selectedComConId]);
}


    public function render()
    {
        if($this->view_type == 'admin_view')
        {
            return view('livewire.com-cons-gestion');
        }
        else
        {
            return view('livewire.com-cons-user_view');
        }
    }
}
