<?php
// $page = new Page();
// $res = $page->set();
// print_r($res);
class Page
{
    private $total; //数据表中总记录数
    private $listRows;//每页显示行数
    private $limit; //SQL语句使用limit从句限制获取的记录条数
    private $uri; //自动获取URL的请求地址
    private $pageNum;  //总页数
    private $page;
    private $config= array('header'=>"条记录",
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
    $this->uri = $this->getUri();
    $this->pageNum=ceil($this->total/$this->listRows);
    $this->page = !empty($_GET["page"])?$_GET["page"]:1;
    $this->pageNum = $this->setLimit();
    /*以下判断用来设置当前页*/
}
private function setLimit(){
    return "Limit".($this->page-1)*$this->listRows."{$this->listRows}";
}

private function getUri()
{
    # code...
    $url = $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?");
    $parse = parse_url($url);
    if (isset($parse["query"])) {
        # code...
        parse_str($parse['query'],$params);
        unset($params["page"]);
        $url = $parse['path'].'?'.http_build_query($params);
    }
    return $url;
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
private  function __get($args)
{
    // TODO: Implement __get() method.
    if ($args == "limit")
        return $this->limit;
    else
        return null;
}
function fpage(){
    $html="&nbsp;&nbsp;共有<b>{$this->total}</b>{$this->config["header"]}&nbsp;&nbsp;";
    $html.="&nbsp;&nbsp;每页显示<b>{$this->listRows}条</b>{$this->config["header"]}&nbsp;&nbsp;";
   // $html[1] ="&nbsp;本页<b>".$this->disnum()."</b> 条 &nbsp;";
    return $html;
}


}