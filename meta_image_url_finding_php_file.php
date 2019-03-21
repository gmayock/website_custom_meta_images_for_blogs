<?php
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/filepath/';
$file_array = scandir ($uploaddir);
$httpdir = '/filepath/';

$file_name_array = array();
foreach ($file_array as $k => $val) {
    $splitted = explode('.', $val);
    if (count($splitted) > 1) {
        $value = $splitted[0];
        $file_name_array[] = $value;
    }
}
$file_ext_array = array();
foreach ($file_array as $k => $val) {
    $splitted = explode('.', $val);
    if (count($splitted) > 1) {
        $key = $splitted[0];
        $value = $splitted[1];
        $file_ext_array[$key] = $value;
    }
}

if(isset($_GET['name'])) {
    if (in_array($_GET['name'], $file_name_array)) {
        $imgurl = $_SERVER['HTTP_HOST'].$httpdir.$_GET['name'].'.'.$file_ext_array[$_GET['name']];
    }
    else {
        $imgurl = $_SERVER['HTTP_HOST']."/images/defaultmetaj.jpg";
    }
}
else {
    $imgurl = $_SERVER['HTTP_HOST']."/images/defaultmetaj.jpg";
}

?>
