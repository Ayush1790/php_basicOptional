<?php 
$pattern="/[a-zA-Z0-9_\-\.]+[@][a-z]+[.][a-z]{2,4}/";
$text="random@random.com";
if(preg_match($pattern , $text)){
    echo "email id is correct";
}else{
    echo "email id is not correct";
}
?>