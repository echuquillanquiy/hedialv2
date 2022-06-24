<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function medical()
    {
        return $this->hasOne(Medical::class)->withDefault();
    }

    public function nurse()
    {
        return $this->hasOne(Nurse::class)->withDefault();
    }

    public function treatment()
    {
        return $this->hasOne(Treatment::class)->withDefault();
    }

    public function room()
    {
        return $this->hasOne(Room::class);
    }

    public function turn()
    {
        return $this->hasOne(Turn::class);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
