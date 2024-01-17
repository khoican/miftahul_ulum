<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'id',
        'title',
        'logo',
        'pengurus',
        'photo',
        'body',
        'file',
        'kategorisId',
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategorisId');
    }
}
