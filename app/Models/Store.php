<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Store extends Model
{
   use HasFactory;
   public static function insert($value,$access_token)
   {
       return DB::insert('insert into stores (store, token) values (?, ?)', [$value, $access_token]);
   }
}
