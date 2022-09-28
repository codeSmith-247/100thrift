<?php

class PageBuilder {

    function __construct(){
        global $root;
        require_once $root . 'pages/pageBuilder/head/head.php';
        
    }

    function navigation() {
        global $root;
        require_once $root . 'pages/pageBuilder/navigation/navigation.php';
    }

    function header() {
        global $root;
        require_once $root . 'pages/pageBuilder/header/header.php';
    }

    function middle_two() {
        global $root;
        require_once $root . 'pages/pageBuilder/middle_two/middle_two.php';
    }

    function end_body() {
        echo "</div>";
        echo "</body>";
        echo "</html>";
    }
}