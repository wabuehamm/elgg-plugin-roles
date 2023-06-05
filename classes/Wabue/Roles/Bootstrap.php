<?php

namespace Wabue\Roles;

/**
 * Plugin Bootstrap
 * Check out http://learn.elgg.org/en/stable/guides/plugins/bootstrap.html for details
 */

use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap
{
    public function init()
    {
        $webService = new WebService();
        $webService->register();
    }
}