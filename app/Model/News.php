<?php

namespace Model;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'news';
    protected $fillable = [
        'discription',
        'title',
        'photo'
    ];

    public function photo($img)
    {
        $photo = time() . $img['name'];
        $this->photo = $photo;
        move_uploaded_file($img['tmp_name'],  __DIR__ . '/lab3/public//img/' . $photo);
    }
}
