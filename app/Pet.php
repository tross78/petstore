<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category', 'name', 'photoUrls', 'tags', 'status'
    ];

    protected $casts = [
        'photoUrls' => 'json',
        'tags' => 'json'
    ];
}
