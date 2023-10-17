<?php
/**
 * This file is part of the Igitt package.
 *
 * (c) Hiren Chhatbar <hc.rajkot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Models;

use Hiren\Igitt\Models\Role as BaseRole;

/**
 * Role class
 *
 * @author Hiren Chhatbar <hc.rajkot@gmail.com>
 */
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