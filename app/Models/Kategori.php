<?php

namespace App\Models;

use App\Models\Pendidikan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function pendidikan() {
        return $this->hasOne(Pendidikan::class, 'kategorisId');
    }
}
