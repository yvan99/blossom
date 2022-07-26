<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyticStudent extends Model
{
    use HasFactory;
    public $table='student_quizdata';
    public $timestamps=false;
}
