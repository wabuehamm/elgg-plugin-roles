<?php

namespace Wabue\Roles\Entities;

class Role extends \ElggObject
{
    public static $subtype = 'role';

    protected function initializeAttributes()
    {
        parent::initializeAttributes();
        $this->attributes['subtype'] = Role::$subtype;
    }
}