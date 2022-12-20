<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
use Session;

class studentMiddlewire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $roll = Session::get('student_roll');
        $student = student::where('roll',$roll)->count();

        $student_email = Session::get('student_email');
        $varified_student = User::where('email',$student_email)
                               ->where('varified_by_admin',1)
                                ->get();

        if($varified_student){

            if($student > 0){
    
                return $next($request);
            }
            else{
                
                return redirect()->to('/student-personal-information');
            }
        }
        else{
            return redirect()->to('/not-verified-component');
        }
    }
}
