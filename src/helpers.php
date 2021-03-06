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

use Chanr1th\Alert\Alert;

if (!function_exists('alert')) {
    /**
     * Flash an alert.
     *
     * @param string|null $message
     * @param string|null $style
     * @param string|null $title
     *
     * @return \Chanr1th\Alert\Alert
     */
    function alert(string $message = null, string $style = 'info', string $title = ''): Alert
    {
        $alert = app('alert');

        if (is_null($message)) {
            return $alert;
        }

        return $alert->flash($message, $style, $title);
    }
}
