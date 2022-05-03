<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    function codeGenerator($prefix){
        return $prefix.rand(100000,999999);
      }
}
