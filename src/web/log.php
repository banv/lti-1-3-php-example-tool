<?php
function lti_log(...$messages) {

	$log_message = date('y-m-d h:i:s');
	foreach ($messages as $m) {
		if (is_string($m)) {
			$log_message .= " , ".$m;
		} else {
			$m1 = print_r($m, true);
			$log_message .= " , ".$m1;
		}
	}
	error_log($log_message, 3, "/var/log/apache2/lti.log");


}
