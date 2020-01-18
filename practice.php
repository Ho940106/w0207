<?php
$a = array(
    0 => array("id"=>1,"title"=>"iPhone","price"=>3600),
    1 => array("id"=>2,"title"=>"Samsung","price"=>2500),
    2 => array("id"=>3,"title"=>"HTC","price"=>1566),
);



//Insert Huawei into array
$a[3] = array("id"=>4,"title"=>"Huawei","price"=>2600); // or use $a[] = , it means push array
print_r($a);

?>