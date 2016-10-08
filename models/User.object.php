<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: [INSERT]
 * File: PodelAPI/User.object.php
 * Depends: [NONE]
 */

namespace PodelAPI\Models;
require_once __DIR__ . '/BaseModel.object.php';

class User extends BaseModel
{
    protected $moderator;
    protected $user_type;
    protected $experiments;

}