<?php

class Solution{
    function levelOrder($root){
        if(empty($root)) return [];
        $result =[];
        $this->helper($result,$root,0);
        return $result;
    }

    function helper(&$result,$node,$level){
        if(empty($node)) return;
        if (count($result)<$level+1){
            array_push($result,[]);
        }
        array_push($result[$level],$node->val);
        $this->helper($result,$node->left,$level+1);;
        $this->helper($result,$node->right,$level+1);;
    }

    function maxDepth($root) {
        if(empty($root)) return 0;
        $left = $this->maxDepth($root->left);
        $right = $this->maxDepth($root->right);
        return $left<$right?  $right+1:$left+1;

    }
    function minDepth($root){
        if(empty($root)) return 0;
            $left=$this->minDepth($root->left);
            $right=$this->minDepth($root->right);
            if($left==0 || $right==0) return $left+$right+1;
            return min($left,$right)+1;
    }


}
?>