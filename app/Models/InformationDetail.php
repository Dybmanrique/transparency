<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'is_active',
        'information_id',
    ];

    public function information() {
        return $this->belongsTo(Information::class);
    }
}
