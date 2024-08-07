<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'uuid',
        'name',
        'email',
        'password',
        'no_hp',
        'status'
    ];
    // protected $fillable = [
    //     'uuid',
    //     'name',
    //     'email',
    //     'password',
    //     'no_hp',
    //     'status'
    // ];
}
