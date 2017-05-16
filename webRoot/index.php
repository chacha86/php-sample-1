<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../web_init.php';

$actArgs = &$_REQUEST;

// 액션이 안넘어 왔을 경우
if ( isset($actArgs['act']) === false ) {
	$actArgs['act'] = 'usc__home__index';
}

if ( count(explode('__', $actArgs['act'])) == 2 ) {
	$actArgs['act'] = 'usc__' . $actArgs['act'];
}

$safeSqlArgs = $actArgs;

list($controllerType, $controllerName, $actionTargetName) = explode('__', $actArgs['act']);

if ( substr($actionTargetName, 0, 2) != 'do' ) {
	$viewPath = null;
	$viewPath = $_SERVER['DOCUMENT_ROOT'] . '/../view/' . $controllerType . '/' . $controllerName . '/' . $actionTargetName . '.php';

	$headPath = $_SERVER['DOCUMENT_ROOT'] . '/../view/tile/commonHead.php';
	$footPath = $_SERVER['DOCUMENT_ROOT'] . '/../view/tile/commonFoot.php';

	require_once $headPath;
	require_once $viewPath;
	require_once $footPath;
}
else {
	$doPath = null;
	$actionTargetName2 = lcfirst(substr($actionTargetName, 2));
	$doPath = $_SERVER['DOCUMENT_ROOT'] . '/../do/' . $controllerType . '/' . $controllerName . '/' . $actionTargetName2 . '.php';

	require_once $doPath;
}
?>
