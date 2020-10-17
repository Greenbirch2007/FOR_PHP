<?php
class Solution{
    function preorderTraversal($root){
        $res =[];
        $list=[];
        array_unshift($res,$root);
        while (!empty($res)){
            $current = array_shift($res);
            if ($current==null) continue;
            array_push($list,$current->val);
            array_unshift($res,$current->right);
            array_unshift($res,$current->left);
        }
        return $list;
    }
    function inorderTraversal($root){
        $res=[];
        $this->helper($root,$res);
        return $res;

    }
    function helper($root,&$res){
        if($root!=null){
            if($root->left !=null) $this->helper($root->left,$res);
            array_push($res,$root->val);
            if ($root->right != null) $this->helper($root->right,$res);;
        }

    }
    function inorderTraversal1($root){
        $res=[];
        $list=[];
        while (!empty($list) || $root !=null){
            while ($root!=null){
                array_unshift($list,$root);
                $root = $root->left;

            }
            $root=array_shift($list);
            array_push($res,$root->val);
            $root=$root->right;

        }
        return $res;


    }

    function postorderTraversal($root){
        $list=[];
        $res=[];
        array_push($list,$root);
        while (!empty($list)){
            $node = array_shift($list);
            if(!$node) continue;
            array_unshift($res,$node->val);
            array_unshift($list,$node->left);
            array_unshift($list,$node->right);


        }
        return $res;
    }

}
?>