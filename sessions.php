<?php

class Session {
    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return self::isStarted() ? ($_SESSION[$key] ?? null) : null;
    }

    public static function destroy() {
        if (self::isStarted()) {
            session_unset();  // Clears all session variables
            session_destroy(); // Destroys the session
            $_SESSION = [];    // Ensure session is fully cleared
        }
    }

    private static function isStarted() {
        return session_status() === PHP_SESSION_ACTIVE;
    }
}

?>
