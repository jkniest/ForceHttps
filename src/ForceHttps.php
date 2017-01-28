<?php
/**
 * Force HTTPS Middleware
 * PHP version 5
 *
 * @category Middleware
 * @package  jkniest\ForceHttps
 * @author   Jordan Kniest <jkniest@gena-clusters.net>
 * @license  MIT <https://github.com/jkniest/ForceHttps/blob/master/LICENSE>
 * @link     https://jkniest.de
 */

namespace jkniest\ForceHttps;

use Closure;
use Illuminate\Support\Facades\Redirect;

/**
 * Redirect a unsecure request to a secure request if the configuration "https.force"
 * is set to true.
 *
 * @category Middleware
 * @package  jkniest\ForceHttps
 * @author   Jordan Kniest <jkniest@gena-clusters.net>
 * @license  MIT <https://github.com/jkniest/ForceHttps/blob/master/LICENSE>
 * @link     https://jkniest.de
 */
class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure  $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (config('https.force') && !$request->isSecure()) {
            return Redirect::secure($request->path());
        }

        return $next($request);
    }
}
