<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiResponse extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'type', 'message' 
    ];
}
