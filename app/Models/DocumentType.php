<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    /** @use HasFactory<\Database\Factories\DocumentTypeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
