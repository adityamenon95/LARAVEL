<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class crud extends Model
{
   protected $table="cruds";
   protected $fillable=['image','username','email','password','phoneno','gender','skill','city','address'];
}