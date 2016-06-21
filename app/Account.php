<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
   protected $fillable= [
       'Year',
       'COA',
       'Description',
       'Debit_Credit',
       'Amount'
   ];
}
