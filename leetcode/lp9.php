<?php

class Solution{
    function sortedListToBST($head){
        $data=[];
        while ($head){
            array_push($data,$head->val);
            $head=$head->next;
        }
        return $this->helper($data);
    }

}
?>