<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComCons_Member extends Model
{
    use HasFactory;
    protected $table = 'com_cons_members';
    public  $timestamps = false;
    protected $fillable = ['com_cons_id', 'member_id'];
}
