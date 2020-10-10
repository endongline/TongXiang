<?php
$config= array('head'=>"条记录",
    'prev'=>"上一页",
    'next'=>"下一页",
    'first'=>"首页",
    'last'=>"末页"
);
if (array_key_exists($param, $config)) {
    echo "The 'first' element is in the array";
}
?>