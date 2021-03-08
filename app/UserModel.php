<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'usertable';
    protected $primaryKey = 'id';
    
    public $timestamps = true;

    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'last_update';
}
