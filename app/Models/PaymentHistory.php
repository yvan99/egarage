<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;
    public $table='service_payments';
    protected $primaryKey = 'pay_id';
    public $timestamps=false;
}
