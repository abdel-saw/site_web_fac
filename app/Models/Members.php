<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable=['nom','prenom','email','fonction','numero_telephone'];
    public function commissions()
    {
        return $this->belongsToMany(Commissions_Conseil::class ,'com_cons_members');
    }
}
