<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Members;

class MemberViewMore extends Component
{
    public $member;
    public $view_type='user';
    public function mount($id , $view_type)
    {
        $this->member=Members::find($id);
        $this->view_type=$view_type;
    }
    public function render()
    {
        if($this->view_type=='admin')
        return view('livewire.member-view-more')->layout('layouts.gestion-com-cons-layout');
        else
        {
            return view('livewire.member-view-more')->layout('layouts.a-propos-layout',['header'=>' a propos du membre']);
        }
    }
}
