<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\teacher\teacher;
use App\Models\User;
use Session;

class teacherMiddleware
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
        $roll = Session::get('teacher_roll');
        $teacher = teacher::where('teacher_id',$roll)->count();

        $teacher_email = Session::get('teacher_email');
        $varified_teacher = User::where('email',$teacher_email)
                               ->where('varified_by_admin',1)
                               ->where('is_teacher',1)
                                ->get();

        if($varified_teacher){

            if($teacher > 0){
    
                return $next($request);
            }
            else{
                
                return redirect()->to('/teacher-personal-information');
            }
        }
        else{
            return redirect()->to('/not-verified-component');
        }
    }
}
