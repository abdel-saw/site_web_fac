<?php

namespace App\Http\Controllers;

use App\Models\Commissions_Conseil;
use Illuminate\Http\Request;
use App\Models\Members;


class ComConsMemberController extends Controller
{
    /* form for adding new member of a commission-conseils in the database*/
    public function createMember()
    {
        return view('view_admin.Gestion_Conseil_Commi.AddMemberForm');
    }

    /* store the new member in the database */

    public function storeMember(Request $request)
    {
        $validateData=$request->validate([
            'nom'=>'required|string|max:255',
            'prenom'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:members',
            'fonction'=>'nullable|string',
            'numero_telephone'=>'nullable|string|max:25',
            
        ]);
        Members::create($validateData);
        return redirect()->route('add-com-cons-member')->with('success','new member add successfully');
    }
    
    /*create a new commission-conseil in the database */
    public function createComm_Cons()
    {
        return view('view_admin.Gestion_Conseil_Commi.AddComm_ConsForm');
    }

    /* store the new commission-conseil in the database */ 
    public function storeComm_Cons(Request $request)
    {
        $validateData=$request->validate([
        'name'=>'required|string|max:255',
        'description'=>'nullable|string',
    ]);

        Commissions_Conseil::create($validateData);
        return redirect()->route('add-com-cons')->with('success','new commission-conseil add successfully');
    }
}
