<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Employees;
class Companies extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'logo',
        'website',
    ];

    public function employees(){
        return $this->belongsTo(\App\Models\Employees::class);
    }
}
