<?php
    session_start();

    function isLoggedIn() {
        if (isset($_SESSION['role'])) {
            return true;
        } else {
            return false;
        }
    }
    function adminIn() {
        if (isset($_SESSION['name'])) {
            return true;
        } else {
            return false;
        }
    }
