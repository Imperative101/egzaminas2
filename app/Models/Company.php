<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    public function companyCustomer()
   {
    return $this->hasMany('App\Models\Customer', 'company_id', 'id');

   }
}
