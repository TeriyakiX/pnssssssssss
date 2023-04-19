<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subvision extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'Subdivision';
    protected $fillable = [
        'id',
        'name',
        'type_sub',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class,'type_sub','id');
    }
    public function roooms()
    {
        return $this->hasMany(Room::class,'type_room_id','id');
    }
}