<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch',  
        'item',  
        'purpose',  
        'requestor',  
        'quantity',  
        'date_received',  
        'status'
    ];
}
