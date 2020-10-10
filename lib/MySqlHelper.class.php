<?php
//$sql="select count(*) from log_sheet";
//
//$mysql = new MySqlHelper();
//echo "<pre>";
//print_r($mysql->mGetAll($sql));

//print_r($mysql->getFetchRow($sql))  ;
 class MySqlHelper{
     private $host = 'localhost';                  //服务器地址
     private $name = 'root';                       //登录账号
     private $password = 'root';                        //登录密码
     private $dbname = 'tx_fpsys';                 //数据库名称
     private $port='3308';                     //数据库端口
     private $link='';                             //数据库连接资源
     private $result = '';                          //结果集
     private $msg = '';                             //返回结果
     private $fields;                               //返回字段
     private $fieldsNum = 0;                        //返回字段数
     private $rowsNum = 0;                          //返回结果数
     private $rowsRst = '';                         //返回单条记录的字段数组
     private $filesArray = array();                 //返回字段数组
     private $rowsArray = array();                  //返回结果数组
     private $data = array();                  //返回结果数组


     public function __construct($host='',$name='',$password='',$dbname='',$port='')
     {
         # code...
         if ($host!='') {
             # code...
             $this->host=$host;
         }
         if ($name!='') {
             # code...
             $this->name=$name;
         }
         if ($password!='') {
             # code...
             $this->pwd=$password;
         }
         if ($dbname!='') {
             # code...
             $this->dbname=$dbname;
         }
         if ($port!='') {
             # code...
             $this->port=$port;
         }
         $this->link();

     }
    public function link(){
         $this->link = new mysqli($this->host,$this->name,$this->password,$this->dbname,$this->port);
        if ($this->link->connect_error) {
            die('Connect Error (' . $this->link->connect_errno . ') '
                . $this->link->connect_error);
        }
     }



     #执行dql语句
     #先来看查询函数。查询函数根据传过来的SQL语句进行查询，
     #并将查询结果保存到成员变量$result中。
     public function execute_dql($sql){
         if ($this->link==''){
             $this->link();
         }
         $this->result=$this->link->query($sql)or die($this->link->error);
//         if ($this->result){
//             mLog($sql);
//         } else{
//             mLog($sql."\n".$this->link->error);
//         }
         return $this->result;
    }

     /**
      * select 查询多行数据
      * @param $sql str select等
      * @return mixed select 查询成功，返回二维数组，失败返回false   s
      */
function mGetAll($sql){
    $rs = $this->execute_dql($sql);
    if (!$rs){
        return false;
    }
    $data = array();
    while ($row =$rs->fetch_assoc()){
        $this->data[]=$row;
    }
    return $data;
    
}

     /**
      * @return string
      * 返回查询记录数函数。根据查询结果，返回记录数
      * 返回查询记录数函数。根据查询结果，返回记录数。代码如下：
      */
     public function getRowsNum($sql)
     {
         $result = $this->execute_dql($sql);
         if ($this->link->errno==0){
             $this->row=mysqli_num_rows($result);
             return $this->row;
         } else{
             return'';
         }
     }
     //取得字段数
     function getFieldsNum($sql){
             $this->execute_dql($sql);
             $this->fieldsNum=$this->result->num_fields();
     }


     /**
      * @param $sql
      * @return string 返回一条数据结果集
      */
       function getFetchRow($sql){
           $result = $this->execute_dql($sql);
           if ($this->link->errno==0){
               $this->row=$this->result->fetch_row();
               return $this->row;
           } else{
               return'';
           }
       }

     function getFetchAssoc($sql){
         $rs = $this->execute_dql($sql);
         $data = array();
         if ($this->link->errno==0){
             while ($row =$rs->fetch_assoc()){
                 $data[]=$row;
             }
             return $data;
//             $this->rows=$this->result->fetch_assoc();
//             return $this->rows;
         }
//         if (!$rs){
//             return false;
//         }
//         $data = array();
//         while ($row =$rs->fetch_assoc()){
//             $data[]=$row;
//         }
//         return $data;

     }


 #取得记录数组函数。功能同上，只是这里返回一个有多条记录的二维数组
     public function getRowsArray($sql)
     {
         //执行
         $this->execute_dql($sql);
         if ($this->link->errno==0){
             while($rows=$this->result->fetch_array()){
                 $this->rowsArray[]=$rows;
             }
             return $this->rowsArray;
         }else{
             return '';
         }
     }
 #返回更新、删除、添加的记录数函数。该函数用来更新、删除、添加记录并获取受影响的记录数，用来判断操作是否成功。
function uidRst($sql){
         if ($this->link==''){
             $this->link();
         }
         $this->execute_dql($sql);
    $this->rowsNum=mysqli_affected_rows($this->link);
    if ($this->rowsNum>0){
        return $this->rowsNum;

    }else{
        return '';
    }
}
#关闭资源
     public function close_link()
     {
         # code...
         if (!empty($this->link)) {
             # code...
             $this->link->close();
         }
     }
}

/**
 * log日志记录功能
 * @param str $str  待记录的字符串
 */


//function mLog($str){
//    $filename = ROOT.'/log/'.date('Ymd').'.txt';
//    $log="---------------------------------------------\n".date('Y-m-d H:i:s')."\n".$str."\n"."---------------------------------------------\n\n";
//    return  file_get_contents('filename','$log',NULL);
//}



