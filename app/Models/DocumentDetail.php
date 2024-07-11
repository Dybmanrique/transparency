<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file',
        'is_active',
        'document_id',
    ];

    public function document() {
        return $this->belongsTo(Document::class);
    }
}
