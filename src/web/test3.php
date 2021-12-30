<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../db/example_database.php';
require_once __DIR__ . '/log.php';

lti_log("test3 reg", $_REQUEST);

lti_log("test3 server", $_SERVER);


use \IMSGlobal\LTI;
$launch = LTI\LTI_Message_Launch::new(new Example_Database())
    ->validate();

$launch_id = $launch->get_launch_id();

echo "launch id: ". $launch_id;
lti_log("launch id: ".$launch_id);
echo "<br/>";


if ($launch->is_resource_launch()) {
	echo 'Resource Launch!';
} else if ($launch->is_deep_link_launch()) {
	echo 'Deep Linking Launch!';
} else {
	echo 'Unknown launch type';
}

echo "<br/>";

if ($launch->has_ags()) {
	echo 'Has Assignments and Grades Service';
	echo "<br/>";
}
if ($launch->has_nrps()) {
	echo 'Has Names and Roles Service';
	$nrps = $launch->get_nrps();
	$members = $nrps->get_members();
	echo "<br/>";
	echo "member ".$members;

	lti_log("nrps", $nrps);
	lti_log("member", $members);
}


