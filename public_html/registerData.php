<?php

if (isset($_POST['submit'])) {
    
    include_once 'connectDB.php';
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($first)||empty($last)&&empty($email)&&empty($username)&&empty($password)) {
         header("Location: loginRegister.php?signup=empty");
          exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $first)||!preg_match("/^[a-zA-Z]*$/",$last)) {
           header("Location: loginRegister.php?signup=invalid");
          exit();  
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              header("Location: loginRegister.php?signup=email");
              exit();  
            } else {
                $query = "SELECT * FROM users WHERE username = '$username'";
                $result = mysqli_query($conn, $query);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                    header("Location: loginRegister.php?signup=usertaken");
                    exit();  
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (name,surname,email,username,password) VALUES ('$first', '$last','$email','$username','$hashedPwd');";
                     $result = mysqli_query($conn, $sql);
                    if ($result === TRUE) {
                        echo "New record created successfully";
                        //mysqli_query($conn,$sql);
                        header("Location: loginRegister.php?signup=success");
                        exit();
                    }else {
                        echo "there was a problem with your query";

                    }
                      
                }
            }
        }
    }
} else {
    header("Location: loginRegister.php");
    exit();
}


mysqli_close($conn);


?>