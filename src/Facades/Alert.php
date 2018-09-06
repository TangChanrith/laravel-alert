<?php

/*
 * This file is part of Laravel Alert.
 *
 * (c) Tang Chanrith <tang.chanrith@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Chanr1th\Alert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the alert facade class.
 *
 * @author Tang Chanrith <tang.chanrith@gmail.com>
 */
class Alert extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'alert';
    }
}
