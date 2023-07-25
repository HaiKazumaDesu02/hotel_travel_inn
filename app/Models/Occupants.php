<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupants extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function bill()
    {
        return $this->hasOne(Bills::class, 'occupant_id');
    }
    public function room()
{
    return $this->belongsTo(Rooms::class, 'room_number');
}


}
