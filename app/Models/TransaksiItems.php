<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi', 
        'id_items', 
        'title', 
        'quantity', 
        'price'
    ];
}
