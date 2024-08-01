<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class ComConsMemberController extends Controller
{
    /* form for adding new member of a commission-conseils in the database*/
    public function create()
    {
        return view('view_admin.Gestion_Conseil_Commi.AddMemberForm');
    }

    /* store the new member in the database */

    public function store(Request $request)
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
}
