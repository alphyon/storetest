<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 25/5/18
 * Time: 17:00
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function details(){
        return $this->hasMany(Details::class);
    }


}