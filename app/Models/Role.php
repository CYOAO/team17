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
    public function scopeStars($query, $stars)
    {
        $query->where('stars', '=',$stars);
    }

    public function scopeAllGenders($query)
    { 
        return $query->select('gender')->groupBy('gender');
    }

    public function scopeGender($query, $gen)
    {
        return $query->where('gender', '=', $gen);
    }    
}
