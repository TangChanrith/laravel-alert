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

namespace Chanr1th\Alert;

use Illuminate\Session\Store;

/**
 * This is the alert class.
 *
 * @author Tang Chanrith <tang.chanrith@gmail.com>
 */
class Alert
{
    /**
     * The session storage instance.
     *
     * @var \Illuminate\Session\Store
     */
    protected $session;

    /**
     * Create a new alert instance.
     *
     * @param \Illuminate\Session\Store $session
     *
     * @return void
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an alert.
     *
     * @param string $message
     * @param string $style
     * @param string $title
     *
     * @return \Chanr1th\Alert\Alert
     */
    public function flash(string $message, string $style = 'info', string $title = ''): self
    {
        $this->session->flash('alert.message', $message);
        $this->session->flash('alert.style', $style);
        if($title !== '')
            $this->session->flash('alert.title', $title);

        return $this;
    }

    /**
     * Flash a danger alert.
     *
     * @param string $message
     * @param string|null $title
     *
     * @return \Chanr1th\Alert\Alert
     */
    public function danger(string $message, string $title = ''): self
    {
        return $this->flash($message, 'danger', $title);
    }

    /**
     * Flash an error alert.
     *
     * @param string $message
     * @param string|null $title
     *
     * @return \Chanr1th\Alert\Alert
     */
    public function error(string $message, string $title = ''): self
    {
        return $this->danger($message, $title);
    }

    /**
     * Flash an info alert.
     *
     * @param string $message
     * @param string|null $title
     *
     * @return \Chanr1th\Alert\Alert
     */
    public function info(string $message, string $title = ''): self
    {
        return $this->flash($message, 'info', $title);
    }

    /**
     * Flash a success alert.
     *
     * @param string $message
     * @param string|null $title
     *
     * @return \Chanr1th\Alert\Alert
     */
    public function success(string $message, string $title = ''): self
    {
        return $this->flash($message, 'success', $title);
    }

    /**
     * Flash a warning alert.
     *
     * @param string $message
     * @param string|null $title
     *
     * @return \Chanr1th\Alert\Alert
     */
    public function warning(string $message, string $title = ''): self
    {
        return $this->flash($message, 'warning', $title);
    }
}
