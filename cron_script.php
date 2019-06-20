#!/usr/local/bin/php -q

<?php
//Cron job path pattern


require_once("watcher.php");

$obj = controller::create_watcher();

$obj->send_sms_on_condition();


?>
