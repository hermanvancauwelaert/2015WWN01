<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo 'iuhihuih';
//var_dump($_SERVER);
define('INC_PATH',$_SERVER['DOCUMENT_ROOT'].'/2015/2015WWN01/config/');
define('INC_CLAS',$_SERVER['DOCUMENT_ROOT'].'/2015/2015WWN01/include/');
define('INC_VIEW',$_SERVER['DOCUMENT_ROOT'].'/2015/2015WWN01/views/');
//var_dump(INC_PATH);
require(INC_PATH.'Config.php');
require(INC_CLAS.'connection.php');

$a=config::getConfig();
var_dump($a);
print '<br>';

$conn =connection::connect();
//echo 'connection:'.$conn->dump_debug_info().'<br>';
$query = "select id,taal from ww.wwn";
//echo $query;

$stmt = $conn->prepare($query);
var_dump($stmt);
//echo 'test';
include(INC_VIEW.'taalkeuze.php');
if ($stmt = $conn->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}

$conn->close();