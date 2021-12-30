<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../db/example_database.php';
require_once __DIR__ . '/log.php';

use \IMSGlobal\LTI;

//lti_log("sess", $_SESSION);
lti_log("req login", $_REQUEST);
//lti_log("login server", $_SERVER);

$redirect = $_REQUEST['target_link_uri'];

//var_dump($_REQUEST);
LTI\LTI_OIDC_Login::new(new Example_Database())
    ->do_oidc_login_redirect($redirect)
    ->do_redirect();
?>
