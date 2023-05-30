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
        'adress',
        'phone_number',
        'user',
        'role_userr'
    ];

    protected static function booted()
    {
        static::created(function ($adress_book) {
            $adress_book->save();
        });
    }
    public function findIdentity(int $id)
    {
        return self::where('id', $id)->first();
    }


}