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
 * This is the alert test class.
 *
 * @author Tang Chanrith <tang.chanrith@gmail.com>
 */
class AlertTest extends AbstractTestCase
{
    public function testFlash()
    {
        $alert = $this->getAlert();

        $alert->flash('bart');
        $this->assertFlash('bart', 'info');
    }

    public function testError()
    {
        $alert = $this->getAlert();

        $alert->error('maggie');
        $this->assertFlash('maggie', 'danger');
    }

    public function testDanger()
    {
        $alert = $this->getAlert();

        $alert->danger('homer');
        $this->assertFlash('homer', 'danger');
    }

    public function testInfo()
    {
        $alert = $this->getAlert();

        $alert->info('lisa');
        $this->assertFlash('lisa', 'info');
    }

    public function testSuccess()
    {
        $alert = $this->getAlert();

        $alert->success('marge');
        $this->assertFlash('marge', 'success');
    }

    public function testWarning()
    {
        $alert = $this->getAlert();

        $alert->warning('bob');
        $this->assertFlash('bob', 'warning');
    }

    public function getAlert()
    {
        return new Alert($this->app['session.store']);
    }
}
