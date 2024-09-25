<?php
function classautoload($classname){
$directories =["content","Layout","Menus","processes","forms"];
foreach($directories as $dir){
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
    require"includes/constants.php";
    require"includes/dbConnection.php";
    $conn = new dbConnection(DBTYPE,HOSTNAME,DBPORT,HOSTUSER,HOSTPASS,DBNAME);
    

    //create instances of all classes

    $ObjLayout = new layouts();
    $ObjMenus = new menus();
    $ObjHeadings = new headings();
    $ObjLayouts = new layouts();
    $ObjCont = new Contents();
    $Objsign = new signup();
    $ObjAuth = new auth();
    $ObjForm = new user_forms();
    $ObjAuth->signup($conn);

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