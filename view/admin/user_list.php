<?php
include_once "../../lib/init.php";

//echo __DIR__;
//echo ROOT;
$mySqlHelper = new MySqlHelper();
$sql='select * from tx_user order by id';
$res = $mySqlHelper->getRowsArray($sql);
require_once ROOT."/view/admin/user_list.html";