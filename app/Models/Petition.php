<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    //this field is used for checking if this has mass assignment 
    
    //$fillable is used for when small number of mass assignment
    protected $fillable=['title','description','category','author','signees'];
    
    //this is to use when we have large data
    //protected $guarded;
}