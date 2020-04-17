<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $primaryKey = 'id';
    protected $fillable = ['title'];
    
    
}
