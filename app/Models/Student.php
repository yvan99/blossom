<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends Authenticatable
{
    use HasFactory;
    public $table='students';
    public $timestamps=false;
    public $guard='student';
    protected $primaryKey = 'student_id';
}
