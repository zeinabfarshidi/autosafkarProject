<?php

namespace App\Http\Middleware;

use App\Http\Livewire\Admin\Dashboard\Sidebar;
use Closure;
use Illuminate\Http\Request;

class Acces
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
        $array = explode('/', $request->route()->uri());
        $section = collect($array)->last();
        if (Sidebar::permissionToView($section, 'view'))
            return $next($request);
        else
            return abort(403, 'عدم دسترسی');
    }
}
