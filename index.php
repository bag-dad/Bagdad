<?php
//
// PHASE: BOOTSTRAP
//
define('BAGDAD_INSTALL_PATH', dirname(__FILE__));
define('BAGDAD_SITE_PATH', BAGDAD_INSTALL_PATH . '/site');

require(BAGDAD_INSTALL_PATH.'/src/CBagdad/bootstrap.php');

$ly = CBagdad::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();
