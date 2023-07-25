<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function billItems(){
        return $this->hasMany(BillItems::class);
    }
    public function occupant()
    {
        return $this->belongsTo(Occupants::class, 'occupant_id');
    }

}
