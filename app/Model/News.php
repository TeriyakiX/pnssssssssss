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
        'id',
        'discription',
        'title',
        'photo'
    ];

    public function deleteNews($id)
    {
        return $this->delete();
    }

    public function photo($img)
    {
        $photo = time().$img['name'];
        $this->photo = $photo;
//        var_dump($img['tmp_name'],  '../../public/assets/img/' . $photo); die;
        move_uploaded_file($img['tmp_name'], '../../public/assets/img/' . $photo);
    }

}
