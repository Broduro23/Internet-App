<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php
        require_once('load.php');
        //print $obj -> user_age("Alex",2004);
        $ObjLayout -> heading();
        $ObjMenus ->main_menu();
        $ObjCont ->main_content();
        $ObjCont ->side_bar();
        $ObjCont -> about_content();
        
        $ObjHeadings -> main_banner();
        $ObjLayouts ->footer();
        ?>
    
</body>
</html>