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

namespace Chanr1th\Tests\Alert\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Chanr1th\Alert\Alert;
use Chanr1th\Alert\Facades\Alert as Facade;
use Chanr1th\Tests\Alert\AbstractTestCase;

/**
 * This is the alert facade test class.
 *
 * @author Tang Chanrith <tang.chanrith@gmail.com>
 */
class AlertTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'alert';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Facade::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Alert::class;
    }
}
