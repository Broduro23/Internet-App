<?php
    require_once('fnc.php');
    $obj = new fnc();
    require_once "Menus/menus.php";
    require_once "Layout/layouts.php";
    $ObjLayout = new layouts();
    $ObjMenus = new menus();
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