<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Councelor extends Authenticatable
{
    use HasFactory;
    public $table='counsellor';
    public $timestamps=false;
}
