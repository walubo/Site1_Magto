<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Points to your specific table name in phpMyAdmin
    protected $table = 'tbluser'; 

    // Match this to your actual column name. 
    // If your DB uses 'userId', use 'userId'. If it uses 'id', use 'id'.
    protected $primaryKey = 'userId'; 

    // These are the columns Postman is allowed to write to
    protected $fillable = [
        'username', 
        'password', 
        'gender',
        'job_id' 
    ];

    // Activity 6 tables usually don't have created_at/updated_at columns
    public $timestamps = false;
}