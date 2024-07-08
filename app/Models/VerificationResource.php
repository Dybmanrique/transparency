<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'link',
        'is_active',
        'indicator_id',
    ];

    public function indicator(){
        return $this->belongsTo(Indicator::class);
    }
}
