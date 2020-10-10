<?php
include_once "../../lib/init.php";

$li_user_id=$_GET['li_user_id'];
$mySqlHelper = new MySqlHelper();
//$sql="delete"
//var_dump($li_user_id);
//echo $li_user_id;
if(!is_numeric($li_user_id)){
    echo "数据不合法";
    exit();
}
$sql="select count(*) from tx_user where id=$li_user_id";
$res = $mySqlHelper->getFetchRow($sql);
if ($res[0]==0){
    echo "数据不存在";
    exit();
}
