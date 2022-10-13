<?php

require_once $root . 'pages/pageBuilder/builder.php';

$homePage = new PageBuilder();

$homePage->loader();
$homePage->navigation();
$homePage->header();
$homePage->middle_two();
$homePage->product_scroll();
$homePage->footer();
$homePage->end_body();