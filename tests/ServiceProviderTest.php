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

namespace Chanr1th\Tests\Alert;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Chanr1th\Alert\Alert;

/**
 * This is the service provider test class.
 *
 * @author Tang Chanrith <tang.chanrith@gmail.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testAlertIsInjectable()
    {
        $this->assertIsInjectable(Alert::class);
    }
}
