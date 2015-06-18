<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indigrient extends Model
{
    protected $table = 'indigrients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','pictureurl','title'];

    public static $rules = [
        'name' => 'required|max:100',
        'title' => 'required|max:150'
    ];

    public function getCategoryindigrient()
    {
        return $this->hasOne('App\Categoryindigrient', 'id','category_indigrient_id');
    }


}
