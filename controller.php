<?php

    $username = $email=$password=$phone=$confirm_password= '';

    if(isset($_POST['submit'])){

        include('model.php');

        $username= $_POST['username'];
        $password=htmlentities($_POST['password']);
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO users_info (`username`, `password`, `email`, `phone` ) 
            VALUES ('$username', '$password', '$email', '$phone' )";
        
        echo 'Registering';

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();

        }
  
    

    

    

        