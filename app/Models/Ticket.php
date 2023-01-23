<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $primaryKey = 'id'; // tentuin kolom mana
    protected $timestamp = true;
    protected $guarded = [];

    public function cinemas()
    {
        return $this->belongsTo(Cinemas::class);
    }
    
    public function movies()
    {
        return $this->belongsTo(Cinemas::class);
    }
}
