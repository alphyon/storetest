<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 25/5/18
 * Time: 17:01
 */

namespace App\Http\Controllers;


use App\Cart;
use App\Details;
use App\Products;
use App\Purchase;
use App\User;
use Illuminate\Http\Request;


class PurchaseController extends ApiController
{
    public function index(){
        $purchases = Purchase::all();

        return $this->showAll($purchases);
    }

    public function create(Request $request){

        $purchase = new Purchase();
        $purchase->reference=$request->reference;
        $purchase->user_id=$request->user_id;
        $purchase->total=$request->total;

        $details = $request->details;

        if($purchase->save()){

            $count = count($details);

            for($i = 0; $i < $count ;$i++){
                $det[$i] = new Details();
                $det[$i]->product_id = $details[$i]['product_id'];
                $det[$i]->quantity = $details[$i]['quantity'];
                $det[$i]->purchase_id = $purchase->id;
                $det[$i]->save();

                $prodtem = Products::find($det[$i]->product_id);
                $prodtem->quantity = $prodtem->quantity - $det[$i]->quantity;
                $prodtem->update();

            }

            $registros=Cart::where('hash',$request->reference)->get();
            foreach($registros as $registro){
                $ids[]=$registro->id;

            }
            $eliminados = Cart::destroy($ids);

            return $this->showDataMessage("Compra registrada",201);
        }
    }

    public function show($id){
        $purchase = $this->getPurchase($id);
        return $this->showDataMessage($purchase['purchase'],200);
    }

    public function showDetails($id){
        $purchase = $this->getPurchase($id);
        $count = count($purchase['details']);
        $temp = $purchase['details'];
        for($i = 0 ; $i < $count ; $i++){
            $producto[$i] = Products::find($temp[$i]['id']);

        }
        return $this->showDataMessage($producto,200);
    }

    public function showFullPurchase($id){
        $purchase = $this->getPurchase($id);
        $count = count($purchase['details']);
        $temp = $purchase['details'];
        for($i = 0 ; $i < $count ; $i++){
            $producto[$i] = Products::find($temp[$i]['id']);

            $productoe[$i]['name']=$producto[$i]->name;
            $productoe[$i]['price']=$producto[$i]->price;

        }


        $user = User::find($purchase['purchase']->user_id);



        $fullpurchase=[
            "name_client"=>$user->first_name ." ". $user->last_name,
            "email"=>$user->email,
            "reference"=>$purchase['purchase']->reference,
            "total"=>$purchase['purchase']->total,
            "create_at"=>$purchase['purchase']->created_at,
            "detalles"=>$productoe
        ];


        return $this->showDataMessage($fullpurchase);
    }

    public function getPurchase($id){
        $purchase = Purchase::find($id);
        $details = $purchase->details;


        $dt = [
            "purchase" =>$purchase,
            "details"=>$details,
        ];

        return $dt;
    }

}