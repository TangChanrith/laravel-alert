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

use Chanr1th\Alert\Alert;

/**
 * This is the helpers test class.
 *
 * @author Tang Chanrith <tang.chanrith@gmail.com>
 */
class HelpersTest extends AbstractTestCase
{
    public function testStandard()
    {
        $this->assertInstanceOf(Alert::class, alert());
    }

    public function testFlash()
    {
        alert('flanders');
        $this->assertFlash('flanders', 'info');

        alert()->warning('burns');
        $this->assertFlash('burns', 'warning');
    }
}
