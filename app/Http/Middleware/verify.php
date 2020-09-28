<?php

namespace App\Http\Middleware;

use Closure;

class verify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public $database_token;
    public function handle($request, Closure $next)
    {
        $this->database_token = "sourav";
        if($this->database_token == $request->header('token')){
            return $next($request);
        }else{
            return response(array("Notice","Access denied"),401);
        }
        
    }
}
