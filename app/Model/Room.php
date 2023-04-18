<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'room';
    protected $fillable = [
        'id',
        'name',
        'S',
        'slots',
        'type_room_id',
        'type_sub',
    ];


}