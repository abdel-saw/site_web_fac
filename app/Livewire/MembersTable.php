<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Members;

class MembersTable extends Component
{
    public $members;
    public $member;
    public function mount()
    {
        $this->members = Members::all();
    }
    public function viewMore($id)
    {
        return redirect()->route('view-more',['id'=>$id ,'view_type'=>'admin']);
    }
    public function modify($id)
    {
        //
    }
    public function delete($id)
    {
        //
    }
    public function render()
    {
        return view('livewire.members-table');
    }
}
