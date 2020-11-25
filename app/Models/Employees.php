<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Companies;
class Employees extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'companies_id',
    ];
    public function companies(){
        return $this->hasMany(\App\Models\Companies::class, 'id');
    }
}
