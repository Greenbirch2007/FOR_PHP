<?php
class LRCcahe{
    private $capacity;
    private $list;

    function __construct($capacity)
    {
        $this->capacity=$capacity;
        $this->list=new HashList();
    }

    function get($key) {
        if ($key<0) return -1;
        return $this->list->get($key);
    }

    function put($key,$value){
     $size = $this->list->size;
     $isHas=$this->list->checkIndex($key);
     if ($isHas || $size+1 > $this->capacity){
         $this->list->removeNode($key);
     }
     $this->list->addAsHead($key,$value);
    }
}

class HashList{
    public $head;
    public $tail;
    public $size;
    public $buckets=[];
    public function __construct(Node $head=null,Node $tail=null)
    {
        $this->head=$head;
        $this->tail=$tail;
        $this->size=0;
    }
    public function checkIndex($key){
        $res = $this->buckets[$key];
        if ($res){
            return true;
        }
        return false;
    }
    public function get($key){
        $res=$this->buckets[$key];
        if (!$res) return -1;
        $this->moveToHead($res);
        return $res->val;

    }

    public function addAsHead($key,$val)
    {
        $node=new Node($val);
        if ($this->tail==null && $this->head != null){
            $this->tail=$this->head;
            $this->tail->next=null;
            $this->tail->pre=$node;
        }

        $node->pre=null;
        $node->next=$this->head;
        $node->head->pre=$node;
        $node->head=$node;
        $node->key=$key;
        $node->buckets[$key]=$node;
        $node->size++;
    }

    public function removeNode($key)
    {
        $current=$this->head;
        for ($i=1;$i<$this->size;$i++){
            if ($current->key==$key) break;
            $current=$current->next;
        }
        unset($this->buckets[$current->key]);
        if($current->pre==null){
            $current->next->pre=null;
            $this->head=$current->next;
        }else if ($current->next==null){
            $current->pre->next=null;
            $current=$current->pre;
            $this->tail=$current;
        }else{
            $current->pre->next=$current->next;
            $current->next->pre=$current->pre;
            $current=null;
        }
        $this->size--;

    }

}



?>