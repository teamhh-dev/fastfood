<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 

class product extends Model {
use HasFactory; 

protected $fillable = ['id', 'title', 'desc', 'image', 'category_id']; 
protected $hidden = [
    'created_at',
    'updated_at',
];
}
