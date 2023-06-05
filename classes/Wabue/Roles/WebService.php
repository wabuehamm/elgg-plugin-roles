<?php

namespace Wabue\Roles;

use Wabue\Roles\Services\RoleService;

require_once(elgg_get_plugins_path() . "/event_calendar/models/model.php");

class WebService
{
    public function getRoles()
    {
        $user = elgg_get_logged_in_user_entity();
        $roleService = RoleService::factory();
        return $roleService->getRoles($user);
    }

    /**
     * @throws \InvalidParameterException
     */
    public function register()
    {
        elgg_ws_expose_function(
            'roles.get',
            array($this, 'getRoles'),
            [],
            'Fetch the logged in users roles',
            'POST',
            false,
            true
        );

    }
}
