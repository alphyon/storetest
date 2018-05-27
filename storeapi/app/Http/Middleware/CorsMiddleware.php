<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 26/5/18
 * Time: 10:13
 */

namespace App\Http\Middleware;


use Closure;

class CorsMiddleware
{
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin','*')
            ->header('Access-Control-Allow-Methods','GET,POST,PUT,PATCH,DELETE,OPTIONS')
            ->header('Access-Control-Allow-Headers','Content-Type,Authorization,X-Requested-With,x-xsrf-token')
            ->header('Access-Control-Expose-Headers','Authorization');

//        $response = $next($request);
//
//        $response->header('Access-Control-Allow-Origin','*');
//
//        return $response;
    }
}