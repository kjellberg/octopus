<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$OCTOPUS_NO_VIEW = true;
include('../../index.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST') 
	die();

// clean any existing new line characters
$content = str_replace(["\n", "\r"], '', $_POST['content']);
$nameId = $_POST['nameId'];

$route_id = 0;
$loop_id = 0;

// we get back actual HTML instead of new line characters
// so we need to replace them with new lines for proper display
// later on
$content = trim(preg_replace('~(<br\s*/?>)~im', PHP_EOL, $content));


// content is ready to be updated in the database
$c = ContentDB::where('nameId', '=', $nameId)->first();

if (!isset($c))
	$c = new ContentDB;

	$c->nameId = $nameId;
	$c->route_id = $route_id;
	$c->content = $content;

	$c->save();

return print json_encode([
	'success' => 1,
	'nameId' => $nameId,
	'route_id' => $route_id,
	'loop_id' => $loop_id,
	'content' => $content
]);