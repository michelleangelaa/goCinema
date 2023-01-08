<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    protected $table = 'cinemas';
    protected $primaryKey = 'id'; // tentuin kolom mana
    protected $timestamp = true;
    protected $guarded = [];

    public function tickets()
    {
        return $this->hasMany(Tickets::class);
    }
}
