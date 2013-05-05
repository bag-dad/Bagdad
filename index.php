<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 * @package BagdadCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('BAGDAD_INSTALL_PATH', dirname(__FILE__));
define('BAGDAD_SITE_PATH', BAGDAD_INSTALL_PATH . '/site');

require(BAGDAD_INSTALL_PATH.'/src/bootstrap.php');

$ba = CBagdad::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ba->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$ba->ThemeEngineRender();