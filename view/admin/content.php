<?php
include_once "../../lib/init.php";
include_once "../admin/pageNew.class.php";

$mySqlHelper = new MySqlHelper();
$sql='select * from log_sheet order by id';
$res = $mySqlHelper->getRowsArray($sql);
//echo "<pre>";
//print_r($res);
//
//
//

  
    $total=$mySqlHelper->getRowsNum("select * from log_sheet");


	$num=5;
	
	$page=new Page($total, $num, "&cid=99");

	$sql="select * from log_sheet {$page->limit}";
    $res1= $page->fpage();
//	$pageres =$mySqlHelper->getFetchAssoc($sql);
//    echo "<pre>";
var_dump($res1);



require_once ROOT."/view/admin/content.html";
