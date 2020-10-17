<?php
//https://github.com/wuqinqiang/leetcode-php/blob/master/%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84/%E6%95%B0%E7%BB%84%E5%92%8C%E9%93%BE%E8%A1%A8.md
class First{
    private $a;
    private $b;
    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    public function merge()
    {
        $c=[];
        $i=0;
        $j=0;
        while ($i<=count($this->a)-1 && $j<=count($this->b)-1){
            if ($this->a[$i]<$this->b[$j]){
                array_push($c,$this->a[$i]);
                $i++;
            }else{
                array_push($c,$this->b[$j]);
                $j++;
            }
        }
        while ($i<=count($this->a)-1){
            array_push($c,$this->a[$i]);
            $i++;
        }
        while($j<count($this->b)-1){
            array_push($c,$this->b[$j]);
            $j++;
        }
        return $c;

    }
}
$a= [2,5,7,9,66];
$b =[0,1,3,6,4];
$first= new First($a,$b);
var_dump($first->merge());
?>