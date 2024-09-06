<?php
function classautoload($classname){
$directories =["content","Layout","Menus"];
foreach($dirctories as $dir){
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR .$dir.DIRECTORY_SEPARATOR.$classname.".php";
    if(file_exists($filename)AND is_readable($filename)){
        require_once $filename;
    }
}}
spl_autoload_register('classautoload');
    /*require_once('fnc.php');
    $obj = new fnc();
    require_once "Menus/menus.php";
    require_once "Layout/layouts.php";
    require_once "content/headings.php";*/

    //create instances of all classes
    $ObjLayout = new layouts();
    $ObjMenus = new menus();
    $ObjHeadings = new headings();
    $ObjLayouts = new layouts();
    /*$arr = ["black", "white","green","red"];
    foreach($arr as $color){
        print $color."<br>";
    }
    print dirname(__FILE__);
    print"<br>";
    print $_SERVER ["PHP_SELF"];
    print"<br>";
    print basename($_SERVER["PHP_SELF"]);
    print"<br>";
    if(file_exists("index.php")AND is_readable("index.php")){
        print"yes";
    }
    else{
        print"no";
    }
    print"<br>";*/
    
?>