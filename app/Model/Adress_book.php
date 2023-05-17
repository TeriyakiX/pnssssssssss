<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Adress_book extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'adress_book';
    protected $fillable = [
        'id',
        'adress',
        'phone_number',
        'user',
    ];
}