<?php


namespace heliostat\core;

use heliostat\core\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}