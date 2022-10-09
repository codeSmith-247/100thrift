<?php

require_once $root . 'pages/pageBuilder/builder.php';

$homePage = new PageBuilder();

$homePage->loader();
$homePage->navigation();
$homePage->products();
$homePage->footer();
$homePage->end_body();