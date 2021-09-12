<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'measure', 'unit','product_id'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function price()
    {
        return $this->hasOne(price::class);
    }
}
