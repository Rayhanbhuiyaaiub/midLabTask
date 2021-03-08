<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrationModel extends Model
{
    protected $table = 'customertable';
    protected $primaryKey = 'id';
    
    public $timestamps = true;
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'last_updated';
  
}
