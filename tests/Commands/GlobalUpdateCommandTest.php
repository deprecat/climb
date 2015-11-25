<?php

/*
 * This file is part of Climb.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Tests\Climb\Commands;

use Vinkla\Climb\Commands\GlobalUpdateCommand;

/**
 * This is the global update command test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class GlobalUpdateCommandTest extends AbstractCommandTestCase
{
    public function getCommand()
    {
        return new GlobalUpdateCommand();
    }
}
