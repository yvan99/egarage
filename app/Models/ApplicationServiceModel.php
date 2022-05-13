<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationServiceModel extends Model
{
    use HasFactory;
    public $table='applicationservice';
    protected $primaryKey = 'appserv_id';
    public $timestamps=false;
}
