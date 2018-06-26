<?php

namespace App\Session;

use App\Session\SessionStore;

class Session implements SessionStore
{
    public function get($key, $default = null)
    {
        if ($this->exists($key)) {
            return $_SESSION[$key];
        }

        return $default;
    }

    public function set($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $sessionKey => $sessionValue) {
                $_SESSION[$sessionKey] = $sessionValue;
            }
        }
    }

    public function exists($key)
    {
        return ( isset($_SESSION[$key]) && !empty($_SESSION[$key]) );
    }

    public function clear(...$key)
    {
        foreach ($key as $sessionKey) {
            unset($_SESSION[$sessionKey]);
        }
    }

}