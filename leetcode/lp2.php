<?php
class Node
{
    public $data; //节点数据
    public $next; //下一个节点

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkList
{
    private $header;

    function __construct($data)
    {
        $this->header = new Node($data);
    }

    //节点查找
    public function find($item)
    {
        $current = $this->header;
        while ( $current->next !==null && $current->data !== $item) {
            $current = $current->next;
        }
        return $current;
    }

    //在item之后插入
    public function insert($item, $new)
    {
        $Node=new Node($new);
        $current = $this->find($item);
        $Node->next = $current->next;
        $current->next = $Node;
        return true;
    }

    // 显示链表中的元素
    public function display()
    {
        $current = $this->header;
        if ($current->next == null) {
            echo "链表为空！";
            return;
        }
        while ($current->next != null) {
            $list=$current->data . "->";
            if($current->next->next==null){
                $list=$current->data.'->null';
            }
            echo $list;
            $current = $current->next;
        }
    }
}
$linkList=new LinkList('header');
$linkList->insert('header','1');
$linkList->insert('1','5');
$linkList->insert('5','7');
$linkList->insert('1','2');
$linkList->display();
?>