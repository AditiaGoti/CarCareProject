<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableUser extends Model{
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

}
