<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'position',
        'element',
        'belief',
        'god',
        'ruler'

    ];
    public function roles()
    {
        return $this->hasMany('App\Models\Role','aid');
    }

    public function delete()
    {
        $this->roles()->delete();
        return parent::delete();
    }

    public function scopePosition($query, $position)
    {
        $query->where('position', '=',$position);
    }
}
