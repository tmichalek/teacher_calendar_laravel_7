<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Role;

use App\User;

class StudentRedirect
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

  //dd(trim($userRole[0]));
  


   if(trim($userRole[0]) ==="Ystudent"){
      
      
      return $next($request);
    }
   
    
    elseif(trim($userRole[0]) ==="Ostudent"){

      return '';

    }
  
        else {
          return redirect()->back();
        }
        
    }
}
