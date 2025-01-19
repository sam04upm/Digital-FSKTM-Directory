<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';  // Ensure this matches the actual table name
    protected $primaryKey = 'idRoom';  // Ensure this matches the primary key
    protected $name = 'name';
}
