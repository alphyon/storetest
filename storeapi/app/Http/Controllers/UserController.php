<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 25/5/18
 * Time: 21:26
 */

namespace App\Http\Controllers;


use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    public function create(Request $request){
        $user = new User();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password=app('hash')->make($request->password);
        if($user->save()){
            return $this->showOne($user,201);
        }
    }

    public function update(Request $request,$id){
        $user =User::find($id);
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->status=$request->status;
        $user->type=$request->type;
        $user->updated_at=Carbon::now()->format('Y-m-d H:i:s');
        if($user->update()){
            return $this->showOne($user,201);
        }
    }

    public function index(){
        $user = User::all();
        return $this->showAll($user);
    }

    public function blocUser(){
        $user = User::where('status',true);
        return $this->showAll($user->get());
    }

    public function deactivate($id){
        $user =User::find($id);
        $user->status=false;
        $user->updated_at=Carbon::now()->format('Y-m-d H:i:s');
        if($user->update()){
            return $this->showOne($user,201);
        }
    }
}