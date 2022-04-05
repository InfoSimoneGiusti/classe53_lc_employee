<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = ['name', 'lastname', 'badge_number','email','role','photo','level'];

}
