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

    /* store thne new it in the */

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|string|max:255',
            'prenom'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique::members',
            'fonction'=>'nullable|string',
            'numero_telephone'=>'nullable|string|max:25',
            
        ]);
        Members::create($request->all());
        return redirect()->route('view_admin.Gestion_Conseil_Commi.AddMemberForm')->with('success','new member add successfully');
    }
}
