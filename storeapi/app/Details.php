<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 25/5/18
 * Time: 17:14
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'purchase_details';
    public function purchase(){
        return $this->hasOne(Purchase::class);
    }

}