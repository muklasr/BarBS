<?php

namespace App\Http\Middleware;

use App\Models\Mahasiswa;
use Closure;
use Illuminate\Http\Request;

class IsApprove
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $mhs = Mahasiswa::where('user_id', auth()->user()->id);
        if ($mhs->status_id == '2'){
            return $next($request);
        }else{
            return redirect()->route('mahasiswa.home');
        }
    }
}
