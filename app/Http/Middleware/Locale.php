<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;

class Locale
{
	public function handle($request, Closure $next)
	{
		$locale = Session::get('currentLang');
		App::setLocale($locale);

		return $next($request);
	}
}