<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerbooking extends Model
{
    use HasFactory;
    protected $table = 'table_customer_booking';
    protected $fillable =['id','email','Tempat','type','price','durasi','totalharga'];
    public function tempat(){
        return $this->belongsTo(booking::class, 'id', 'id');
    }
}
