<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;
    public $table='garage';
    protected $primaryKey = 'garg_id';
    public $timestamps=false;
}
