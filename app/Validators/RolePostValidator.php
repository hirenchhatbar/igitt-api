<?php
/**
 * This file is part of the Igitt package.
 *
 * (c) Hiren Chhatbar <hc.rajkot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Validators;

use Hiren\Igitt\Validators\RolePostValidator as BaseRolePostValidator;

/**
 * RolePostValidator class
 *
 * @author Hiren Chhatbar <hc.rajkot@gmail.com>
 */
class RolePostValidator extends BaseRolePostValidator
{
    /**
     * @inheritDoc
     */
    public function rules(): array
    {
        $rules = parent::rules();

        // Override anything

        return $rules;
    }
}