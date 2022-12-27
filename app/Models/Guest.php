<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $table = 'guest';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','address','phone','email','country','birthdate','password','username','gender'];
}
