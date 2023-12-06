<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'aid',
        'stars',
        'property',
        'gender',
        'weapon',
        'constellation',
        'permanent_limited',
        'race',
        'birthdate',
        'height',
        'version'
    ];

    public function area()
    {
        return $this->belongsTo('App\Models\Area','aid','id');
    }

}
