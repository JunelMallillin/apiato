<?php

namespace App\Services\Configuration\Providers;

use App\Engine\Provider\Abstracts\ServiceProviderAbstract;
use App\Services\Configuration\Portals\MegavelConfigReaderService;

/**
 * Class MegavelConfigServiceProvider
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class MegavelConfigServiceProvider extends ServiceProviderAbstract
{

    /**
     * Register bindings in the container.
     */
    public function register()
    {
        $this->app->bind('megavelConfigReaderService', function () {
            return $this->app->make(MegavelConfigReaderService::class);
        });
    }
}
