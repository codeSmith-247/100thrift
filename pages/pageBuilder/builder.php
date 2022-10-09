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

    function product_scroll() {
        global $root;
        require_once $root . 'pages/pageBuilder/product_scroll/product_scroll.php';
    }

    function products() {
        global $root;
        require_once $root . 'pages/pageBuilder/products/products.php';
    }

    function loader() {
        global $root;
        require_once $root . 'pages/pageBuilder/loader/loader.php';
    }

    function footer() {
        global $root;
        require_once $root . 'pages/pageBuilder/footer/footer.php';
    }



    function end_body() {
        echo "</div>";
        echo "</body>";
        echo "<script src = 'script/loader.js' defer></script>";
        echo "</html>";
    }
}