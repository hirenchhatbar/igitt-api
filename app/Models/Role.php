<?php

namespace App\Models;

use Hiren\Igitt\Models\Role as BaseRole;

class Role extends BaseRole
{
    /**
     * @inheritDoc
     */
    public function getCollection(array $page, array $filter = [], array $sort = [])
    {
        return parent::getCollection($page, $filter, $sort);
    }
}