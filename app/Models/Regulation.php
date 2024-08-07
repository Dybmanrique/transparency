<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'link',
        'is_active',
        'numeral_id',
    ];

    public function numeral(){
        return $this->belongsTo(Numeral::class);
    }
}
