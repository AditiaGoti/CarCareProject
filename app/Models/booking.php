<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    
    protected $table = 'booking';
    protected $fillable =['id','Tempat','deskripsi','price'];

    public function add(){
        return $this->belongsTo(booking::class, 'id', 'id');
    }
  
}
