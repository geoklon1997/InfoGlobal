<?php

session_start();

if (isset($_POST['submit'])) {
    include 'connectDB.php';
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username) || empty($password)) {
         header("Location: loginRegister.php?login=empty");
         exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username' OR email='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: loginRegister.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
             $hashedPwdCheck = password_verify($password, $row['password']);
             if ($hashedPwdCheck == false) {
                header("Location: loginRegister.php?login=error");
                exit();  
               } elseif ($hashedPwdCheck == true) {
                 
                 $_SESSION['u_id'] = $row['id'];
                 $_SESSION['u_name'] = $row['name'];
                 $_SESSION['u_surname'] = $row['surname'];
                 $_SESSION['u_email'] = $row['email'];
                 $_SESSION['u_username'] = $row['username'];
                
   
                header("Location: index.php?login=success");
                 exit();
             }
            }
        }
    }
}else {
    header("Location: loginRegister.php");
    exit();
}


?>