<?php

namespace App\Http\Middleware;

use App\Models\ProjectStatus;
use Cache;
use Closure;
use Illuminate\Http\Request;

class SuperMiddleware
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
        $status = Cache::get('statusProject');
        if (!$status) {

            $status = ProjectStatus::first();
            Cache::put('statusProject', $status,24*60*60);
        }
        if ($status->status == false) {

            return to_route('cheackFromAuroraTeam');
        } else {
            return $next($request);
        }
    }
}
