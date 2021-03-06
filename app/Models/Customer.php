<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function customerCompany()
   {
    return $this->belongsTo('App\Models\Company', 'company_id', 'id');

   }
}
