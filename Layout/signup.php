<?php
    class signup{
        public function heading(){
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/style.css">
                <title>Register</title>
            </head>
            <body>
            <?php
        }
            public function Regform(){
                ?>
                <div class="wrapper">
                    <h2> Registration form</h2>
                <div class="regform">
                    <form action="datasubmit.php
                    ">
                        <div class="inputbox">
                            <input type="text" placeholder="Username" name="username">
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="Firstname" name="firstname">
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="Lastname" name="lastname">
                        </div>
                        <div class="inputbox">
                            <input type="text" placeholder="email" name="email">
                        </div>
                        <div class="inputbox">
                            <input type="password" placeholder="password" name="password">
                        </div>
                        <!--<div class="inputbox">
                            <input type="password" placeholder="retypepassword" name="retypepassword">
                        </div>-->
                        <div class="regbtn">
                            <input type="submit" placeholder="Register" name="register">
                        </div>
                    </form>
                </div>
            </div>
            <?php    
        }
        public function footer(){
            ?>
            <div class="footer">
                <div>
                    <p>All rights reserved &copy; ICS 2024</p>
                </div>
            </div>     
                                  
            </body>
            </html>
        
        
            
        
            <?php
        }
        }
    ?>