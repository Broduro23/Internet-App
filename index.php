<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my first page</h1>
    <h1>This is my first page</h1>
    <?php
        require_once('load.php');
        //print $obj -> user_age("Alex",2004);
        $ObjLayouts -> heading();
        $ObjMenus ->main_menu();
        ?>
    
</body>
</html>