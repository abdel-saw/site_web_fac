<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Members;
use App\Models\ComCons_Member;

class MemberSelection extends Component
{
    public $com_con_id;
    public $members;
    public $selectedMembers = [];

    public function mount($com_con_id)
    {
        $this->com_con_id = $com_con_id;
        $this->members = Members::all();
    }

    public function addMember($member_id)
    {
        ComCons_Member::create([
            'com_cons_id' => $this->com_con_id,
            'member_id' => $member_id
        ]);
        
        return redirect()->route('voir-com-cons');
    }

    public function render()
    {
        return view('livewire.member-selection')->layout('layouts.app');
    }
}
