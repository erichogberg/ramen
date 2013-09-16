<?php
//
// PHASE: BOOTSTRAP
//
define('Ramen_INSTALL_PATH', dirname(__FILE__));
define('Ramen_SITE_PATH', Ramen_INSTALL_PATH . '/site');

require(Ramen_INSTALL_PATH.'/src/CRamen/bootstrap.php');

$ra = CRamen::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ra->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$ra->ThemeEngineRender();

