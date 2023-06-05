<?php

namespace Wabue\Roles\Services;
use ElggUser;
use Wabue\Roles\Entities\Role;

class RoleService {
    private static $instance;

    /**
     * @return RoleService
     */
    static public function factory() {
        if (!RoleService::$instance) {
            RoleService::$instance = new RoleService();
        }
        return RoleService::$instance;
    }

    public function getRoles(ElggUser $user) {
        $definition = elgg_get_plugin_setting("definition", "roles");
        foreach (explode("\n", $definition) as $line) {
            if (preg_match("/^(?<user>[^:]+):(?<roles>.+)$/", $line, $matches)) {
                if ($matches["user"] == $user->username) {
                    return explode(",", $matches["roles"]);
                }
            }
        }
        return [];
    }
}