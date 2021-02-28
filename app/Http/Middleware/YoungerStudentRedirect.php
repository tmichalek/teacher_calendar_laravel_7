<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Role;

use App\User;


class YoungerStudentRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
     
     $userRole=Role::whereHas('user', function($q)
      {
      $q->where('id',Auth::user()->id);
      })->get()->pluck('role');

      $user=trim($userRole[0]);

      if ($user !="Ystudent")
      {
        return redirect()->route('main')->with('message', 'nie masz uprawnień do logowania do strony dla młodszych uczniów');   
      }
    

        return $next($request);
    }
}
