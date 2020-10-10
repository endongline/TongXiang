<?php

include_once "../../lib/init.php";
include_once "../../lib/MySqlHelper.class.php";

$mySqlHelper = new MySqlHelper();
$mySqlHelper->link();

$sql="select count(*) from log_sheet ";

$res = $mySqlHelper->mGetAll($sql);

require_once ROOT."/view/home/index.html";


