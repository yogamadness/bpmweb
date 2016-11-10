<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
/**
 *
 */
class CekLogin
{
  public function handle($request, Closure $next){
    $result = DB::table('TR_CURRENT_LOGIN')->where([
      ['USER_ID', '=', Session::get('user_id')],
      ['SESSION_ID', '=', Session::get('session_id')]
      ])->get();
    if ($result->count() >= 1) {
      return $next($request);
    }else{
      Session::flush();
      return Redirect('loginn');
    }
  }
}
 ?>
