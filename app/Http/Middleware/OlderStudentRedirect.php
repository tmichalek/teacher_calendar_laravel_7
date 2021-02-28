<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Role;
use Closure;

class OlderStudentRedirect
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
    
       // dd(session());
        $user=trim($userRole[0]);
  
        if ($user !="Ostudent")
        {
          return redirect()->route('main')->with('message', 'nie masz uprawnień do logowania do strony dla starszych uczniów ');   
        }
  
  //    if($user !=="Ystudent" || $user!=="Ostudent")
  //    {
     //$request->session()->flush();
  //     return redirect()->route('main');   
  //     }
      
  
          return $next($request);
      }
    
}
