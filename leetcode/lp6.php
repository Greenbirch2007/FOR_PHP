<?php

class Solution {


    function levelOrder($root) {
        if(empty($root)) return [];
        $result = [];
        $queue = [];
        array_push($queue,$root);
        while (!empty($queue)){
            $count = count($queue);
            $levelQueue =[];
            for ($i=0;$i<count;$i++){
                $node=array_shift($queue);
                array_push($levelQueue,$node->val);
                if($node->left) array_push($queue,$node->left);
                if($node->right) array_push($queue,$node->right);
            }
            array_push($result,$levelQueue);
        }
        return $result;
    }
}

?>