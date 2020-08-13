<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table='quotes';
    protected $fillable=['name','email','quote_content'];
}
