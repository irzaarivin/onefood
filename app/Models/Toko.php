<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $guarded = 'id';

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nama', 'like', '%' . request('search') . '%')->orwhere('lokasi', 'like', '%' . request('search') . '%')->orwhere('deskripsi', 'like', '%' . request('search') . '%');
        });

    }
}
