<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function occupants()
    {
        return $this->hasMany(Occupants::class, 'room_id');
    }

}
