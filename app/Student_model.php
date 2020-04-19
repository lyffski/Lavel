<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_model extends Model
{
   protected $fillable = ['forename', 'lastname']; //create a protected array which stores the db values and those can be modify
}
