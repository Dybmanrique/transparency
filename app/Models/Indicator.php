<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Indicator extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'is_active',
        'component_id',
    ];

    public function component()
    {
        return $this->belongsTo(Component::class);
    }

    public function getTruncatedNameAttribute()
    {
        return Str::limit($this->description, 110); // Trunca a 50 caracteres, por ejemplo
    }
}
