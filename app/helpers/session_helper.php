<?php
    session_start();

    function isLoggedIn() {
        if (isset($_SESSION['role'])) {
            return true;
        } else {
            return false;
        }
    }
