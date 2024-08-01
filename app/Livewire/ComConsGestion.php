<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commissions_Conseil;
use App\Models\Members;
use App\Models\ComCons_Member;

class ComConsGestion extends Component
{
    public $com_cons;
    public function mount()
    {
        $this->com_cons = Commissions_Conseil::all();
    }
    public function render()
    {
        return view('livewire.com-cons-gestion');
    }
}
