<?php
class Solution{
    private $result=true;
    function isBalanced($root){
        if (empty($root)) return true;
        $this->helper($root);
        return $this->result;
    }
    function helper($root)
    {
        if(!$root) return ;
        $left=$this->helper($root->left);
        $right=$this->helper($root->right);
        if(abs($left-$right)>1) $this->result=false;
        return max($left,$right)+1;
    }

    function isSymmetric($root){
        if(empty($root)) return true;
            return $this->helper($root->left,$root->right);
    }
    function helper1($l,$r){
        if(!$l && !$r) return true;
        if(!$l || !$r || $l->val != $r->val) return false;
        return $this->helper($l->left,$r->right) && $this->helper($l->rigth,$r->left);
    }

    function invertTree($root){
        if(!$root) return null;
        $list=[];
        array_push($list,$root);
        while (!empty($list)){
            $node=array_shift($list);
            $temp = $node->left;
            $node->left=$node->right;
            $node->right=$temp;
            if($node->left) array_push($list,$node->left);
            if ($node->right) array_push($list,$node->right);


        }
        return $root;
    }




}

?>