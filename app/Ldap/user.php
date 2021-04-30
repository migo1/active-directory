<?php

namespace App\Ldap;

use LdapRecord\Models\Model;

class user extends Model
{
    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static $objectClasses = [];
}
