<?php
$fp = fopen("test.txt","r");
while(!feof($fp)){
    $data = fgets($fp);
    echo $data."<br>";
}

fclose($fp);
var_dump(filter_list());
foreach(filter_list() as $key=> $val){
    echo $key."|".$val."<br>";
}

function str_to($item){
    return (string)$item;
}
function int_to($item){
    return (int)$item;
}

function test($method,$val){
    return $method($val);
}
var_dump(test('str_to','23.4'));
echo "<br>";
try{
    $r = 100/0;
}
catch(Exception $e){
    echo $e->getMessage();
}

    echo "fine";



?>