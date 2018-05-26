<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 25/5/18
 * Time: 16:23
 */

trait ApiUtils{
    private function successResponse($data,$code){
        return response()->json($data,$code);
    }

    protected function errorResponse($message,$code){
        return response()->json(['error'=>$message,'code'=>$code],$code);
    }

    protected function showAll(Collection $collection, $code = 200)
    {
        return $this->successResponse(['data'=>$collection],$code);
    }

    protected function showAllPaginate(Collection $collection, $code = 200)
    {
        $collection = $this->paginate($collection);
        return $this->successResponse($collection,$code);
    }

    protected function showOne(Model $instance, $code = 200)
    {
        return $this->successResponse(['data'=>$instance],$code);
    }

    protected function showDataMessage($message, $code = 200)
    {
        return response()->json($message,$code);
    }

    protected function paginate(Collection $collection, $paginate = 15)
    {
        $page = LengthAwarePaginator::resolveCurrentPage();
        $perPage = $paginate;
        $results = $collection->slice(($page-1)*$perPage,$perPage)->values();
        $paginated = new LengthAwarePaginator($results,$collection->count(),$perPage,$page,[
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        $paginated->appends(request()->all());

        return $paginated;
    }
}