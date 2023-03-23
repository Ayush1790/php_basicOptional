<?php 
$str="Controller/Action/Parameter";
$token=strtok($str,"/");
$arr=[];
while ($token !== false)
{
array_push($arr,$token);
$token = strtok("/");
}
print_r($arr);
?>