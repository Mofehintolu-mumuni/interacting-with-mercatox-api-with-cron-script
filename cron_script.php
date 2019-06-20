#!/usr/local/bin/php -q

<?php
//Cron job path pattern

//usr/local/bin/php /home/maqualit/public_html/HYDRO_WATCHER/cron_script.php

require_once("watcher.php");

$obj = controller::create_watcher();

$obj->send_sms_on_condition();


?>