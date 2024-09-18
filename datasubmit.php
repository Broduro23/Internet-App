<?php
    include ("includes/dbConnection.php");
        if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        

        // Verifying the uniqueness of the email address
        $verify_query = mysqli_query($this->connection, "SELECT email FROM users WHERE email = '$email'");
        if(mysqli_num_rows($verify_query) != 0){
            echo "<div class='message'><p>Email already exists</p></div>";
        } else {
            // Inserting the user data into the database
            $sql = "INSERT INTO users (username, firstname, lastname, email, password, image_name, usertypes) VALUES ('$username', '$firstname', '$lastname', '$email', '$password')";
            echo "<div class='message'><p>Successful reg</p></div>";
        
        }
    }