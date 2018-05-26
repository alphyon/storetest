<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 25/5/18
 * Time: 15:11
 */

namespace App\Http\Controllers;


use App\Products;
use Illuminate\Http\Request;

class ProductsController extends ApiController
{
    public function index(){
        $products = Products::all();

        return $this->showAll($products);
    }

    public function create(Request $request){
        $product = new Products();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->SKU=$request->SKU;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->image=$request->image;
        if($product->save()){
            return $this->showOne($product,201);
        }
    }

    public function update(Request $request,$id){
        $product = Products::find($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->image=$request->image;
        if($product->update()){
            return $this->showOne($product,201);
        }
    }

    public function destroy($id){
        $product = Products::find($id);
        if($product->delete()){
            return $this->showDataMessage("Registro Eliminado");
        }
    }

    public function show($id){
        $product = Products::find($id);

            return $this->showOne($product,200);
    }

    public function getQuantity($id){
        $product = Products::find($id);

        return $this->showDataMessage($product->quantity,200);
    }
}