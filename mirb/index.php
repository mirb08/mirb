<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package MirbCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('MIRB_INSTALL_PATH', dirname(__FILE__));
define('MIRB_SITE_PATH', MIRB_INSTALL_PATH . '/site');

require(MIRB_INSTALL_PATH.'/src/bootstrap.php');

$mi = CMirb::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$mi->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$mi->ThemeEngineRender();

?>
