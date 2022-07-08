<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class GarageManager extends Authenticatable
{
    use HasFactory;
    public $table='garagemanager';
    public $timestamps=false;
    public  $primaryKey = 'mana_id';
    public function getAuthPassword () {
        return $this->mana_password;
    
    }

}
