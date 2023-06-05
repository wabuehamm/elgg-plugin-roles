<?php

namespace Wabue\Roles;

/**
 * Plugin Bootstrap
 * Check out http://learn.elgg.org/en/stable/guides/plugins/bootstrap.html for details
 */

use Elgg\DefaultPluginBootstrap;
use Elgg\PluginBootstrapInterface;

class Bootstrap extends DefaultPluginBootstrap implements PluginBootstrapInterface
{
    public function init()
    {
        $webService = new WebService();
        $webService->register();
    }
}