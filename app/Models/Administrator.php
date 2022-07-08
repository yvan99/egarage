<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Administrator extends Authenticatable
{
    use HasFactory;
    public $table='admin';
    public $guard = 'admin';
    public  $primaryKey = 'admin_id';
    public $timestamps=false;
}
