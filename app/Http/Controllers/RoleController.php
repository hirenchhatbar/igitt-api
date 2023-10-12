<?php
/**
 * This file is part of the Igitt package.
 *
 * (c) Hiren Chhatbar <hc.rajkot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers;

use Hiren\Igitt\Controllers\RoleController as BaseRoleController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * RoleController class
 *
 * @author Hiren Chhatbar <hc.rajkot@gmail.com>
 */
class RoleController extends BaseRoleController
{
    /**
     * @inheritDoc
     */
    public function post(Request $request): JsonResponse
    {
        return parent::post($request);
    }
}