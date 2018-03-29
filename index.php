<?php
spl_autoload_register(function($className) {
    $filePath = 'lib' . DIRECTORY_SEPARATOR . $className . '.php';
    if (file_exists($filePath)) {
	include_once $filePath;
	return true;
    }
    return false;
});
//function caller(Testable $obj){
//    return $obj->test_();
//}
function caller(Sounding $obj){
    return $obj->voice();
}

//$obj = new Test();
//caller($obj);
//$obj = 'vaso';
//caller($obj);

//$obj = new Second();
//caller($obj);

$cat=new Cat('cat', 'siamese', '4');
caller($cat);
$lion=new Lion('lion', 'african', '10');
caller($lion);
$arr = array();
$arr[]=$cat;
$arr[]=$lion;
