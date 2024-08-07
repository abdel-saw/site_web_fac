<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commissions_Conseil extends Model
{
    use HasFactory;

    protected $fillable=[ 'name','description'];
    public $timestamps = false;
    public function members()
    {
        return $this->belongsToMany(Members::class ,'com_cons_members');
    }

}
