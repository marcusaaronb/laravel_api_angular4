<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'tblemployee';
    public $timestamps = false;
    public $fillable = ['fname','mi','lname','position'];
}
