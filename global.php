<?php
/**
 * @author Wesley Peeters [@link me@wesleypeeters.com]
 * @auhor Jason Tavernier [@link Jason@tavernier.nl]
 * @version V0.1
 * @since V0.1
 */
if ($_SERVER["APP_ENVIRONMENT"] == "dev") {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}

session_start();
include(dirname(__FILE__) . "/SplClassLoader.php");
$splClassLoader = new SplClassLoader();
$splClassLoader->register();
require_once "routes.php";
