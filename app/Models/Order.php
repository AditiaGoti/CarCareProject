<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable =['email','id_barang','title','merek','price','metode','alamat'];

    public function barang(){
        return $this->belongsTo(Shop::class, 'id_barang', 'id');
    }
}
