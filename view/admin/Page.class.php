<?php
$page = new Page();
$res = $page->set();
print_r($res);
class Page
{
    private $total; //数据表中总记录数
    private $listRows;//每页显示行数
    private $limit; //SQL语句使用limit从句限制获取的记录条数
    private $uri; //自动获取URL的请求地址
    private $pageNum;  //总页数
    private $page;
    private $config= array('head'=>"条记录",
        'prev'=>"上一页",
        'next'=>"下一页",
        'first'=>"首页",
        'last'=>"末页"
        );//在分页信息中显示内容，可以自己通过set()方法设置
    private $listNum=10; //默认分页列表显示的个数

/**
 * 构造方法，可以设置分页类的属性
 * @param int $total 计算分页的总记录数
 * @param int $listRows 可选的，设置每页需要显示记录数，默认为25条
 * @param mixed $query 可选的，为向目标页面传递参数，可以是数组，也可以是查询字符串格式
 * @param bool $rod 可选的，默认值true,页面从第一页开始显示，false则为最后一页
 *
 */
public function __construct($total,  $listRows=25, $query="",$ord=true)
{
    $this->total = $total;
    $this->listRows = $listRows;
    $this->uri = $this->getUri($query);
    $this->pageNum=ceil($this->total/$this->listRows);
    /*以下判断用来设置当前页*/
    if (!empty($_GET["page"])){
        $page = $_GET['page'];
    }else{
        if ($ord)
            $page=1;
        else
            $page = $this->pageNum;

    }
    if ($total > 0){
        if(preg_match("/\D/",$page)){
            $this->page=1;
        }else{
            $this->page=$page;
        }
    }else{
        $this->page =0;
    }
    $this->limit = "LIMIT".$this->setLimit();

}

/**
 * 用于设置显示分页的信息，可以进行连贯操作
 * @param string $param 是成员属性数组config 的下标
 * @param string $value 用于设置config下标对应的元素值
 * @return object 返回本对象自己$this,用于连贯操作
 *
 */
function set(string $param , string $value){
    if (array_key_exists($param,$this->config)){

        $this->config[$param]=$value;
    }
    return $this;
}
/*不是直接去调用， 通过该方法，可以在对象外部直接获取私有成员属性limit和page的值*/
function __get($args)
{
    // TODO: Implement __get() method.
    if ($args == "limit" || $args == "page")
        return $this->$args;
    else
        return null;
}
function fpage(){
    $arr = func_get_args();
    $html[0] ="&nbsp;共<b>{$this->total} </b>{$this->config["head"]}&nbsp;";
    $html[1] ="&nbsp;本页<b>".$this->disnum()."</b> 条 &nbsp;";
}


}