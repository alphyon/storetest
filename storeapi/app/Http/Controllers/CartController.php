<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 26/5/18
 * Time: 20:08
 */

namespace App\Http\Controllers;


use App\Cart;
use Illuminate\Http\Request;

class CartController extends ApiController
{

    public function show($hash){
        $cart = Cart::where('hash',$hash)->get();

        $total=0;
        for($i=0;$i<count($cart);$i++){
            $total+= ($cart[$i]->quantity*$cart[$i]->price);
        }

            return $this->showDataMessage(['data'=>$cart,'total'=>$total]);



    }
    public function create(Request $request){
        $cart = new Cart();

        $cart->hash = $request->hash;
        $cart->id_product= $request->id_product;
        $cart->quantity = $request->quantity;
        $cart->name = $request->name;
        $cart->price = $request->price;

        if($cart->save()){
            return $this->showDataMessage("0");
        }
    }

    public function update(Request $request,$id){
    $cart = Cart::find($id);
    $cart->quantity = $request->quantity;

    if($cart->update()){
        return $this->showDataMessage("0");
    }


}

    public function delete($id){
        $cart = Cart::find($id);

        if($cart->delete()){
            return $this->showDataMessage("0");
        }


    }

}