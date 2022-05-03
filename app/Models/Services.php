<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    public $table='service';
    protected $primaryKey = 'serv_id';
    public $timestamps=false;
}
