<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = 'tbljob';
    protected $primaryKey = 'jobid';
    protected $fillable = ['jobname'];
    public $timestamps = false;
}