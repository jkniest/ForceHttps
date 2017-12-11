<?php
/**
 * Force HTTPS Service Provider
 * PHP version 5.
 *
 * @category Service Provider
 * @author   Jordan Kniest <jkniest@gena-clusters.net>
 * @license  MIT <https://github.com/jkniest/ForceHttps/blob/master/LICENSE>
 * @link     https://jkniest.de
 */

namespace jkniest\ForceHttps;

use Illuminate\Support\ServiceProvider;

/**
 * This service provider does only have ONE job:
 * Publish the configuration file!
 *
 * @category Middleware
 * @author   Jordan Kniest <jkniest@gena-clusters.net>
 * @license  MIT <https://github.com/jkniest/ForceHttps/blob/master/LICENSE>
 * @link     https://jkniest.de
 */
class ForceHttpsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/https.php' => config_path('https.php'),
        ], 'force-https');
    }
}
