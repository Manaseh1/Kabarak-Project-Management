<?php
#if the signup button has been set    
if(isset($_POST["signup"])){
    require "dbh.inc.php";
    #Post variables
    
    $name =$_POST['name'];
    $reg_no =$_POST['reg_no'];
    $email =$_POST['email'];
    $role =$_POST['role'];
    $password =$_POST['pwd'];
    $rep_pwd =$_POST['rep_pwd'];
    
//Error messages
    if(empty($name)||empty($reg_no)||empty($email)||empty($password)||empty($role)){
        header("Location: ../signup.php?error=emptyfields&name".$name.'&reg_no'.$reg_no.'&email'.$email.'&password'.$password);
    }
    //check email validity
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&reg_no".$reg_no.'&name'.$name);
    }
    // reg_no validity
    elseif(!preg_match("/^[\Wa-zA-Z0-9]*$/",$reg_no)){
        header("Location: ../signup.php?error=invalidreg_no&email".$email.'&name'.$name);
    }
          

    

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^['a-zA-Z0-9']*$/",$reg_no)){
        header("Location: ../signup.php?error=invalidusernamewithemail&name".$name);
    }
    elseif($password !== $rep_pwd){
        header("Location: ../signup.php?error=passworddontmatch&name".$name.'&reg_no'.$reg_no.'&email'.$email);

    }
    else{
        $sql ="SELECT reg_no FROM users where reg_no=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else{
            //checking if the reg_no has been taken
            mysqli_stmt_bind_param($stmt,"s",$reg_no);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../signup.php?error=Usertaken&reg_no".$email);
                exit();
            }
            else{
             
                $sql = "INSERT INTO users (name,reg_no,user_email,role,password) VALUE(?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo 'sql error';
                }else{
                    
                    $haspas = password_hash($password,PASSWORD_DEFAULT);#hashing
                    mysqli_stmt_bind_param($stmt,"sssss",$name,$reg_no,$email,$role,$haspas);
                    mysqli_stmt_execute($stmt);
                    $sql1 = "SELECT * FROM users where user_email=?";
                    $stmt2 =mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($stmt2,$sql1);
                    mysqli_stmt_bind_param($stmt2,"s",$email);
                    mysqli_stmt_execute($stmt2);
                    $result=mysqli_stmt_get_result($stmt2);
                    if($row = mysqli_fetch_assoc($result)){

                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name']=$row['name'];
                        $_SESSION['uname']=$row['reg_no'];
                        $_SESSION['role']=$row['role'];
                        if($row['role']=='student'){
                            header('Location: ../personal/personal_main.php?success=welcome student');
                        }
                        if($row['role']=='lecturer'){
                            header('Location: ../Lecturer/html/lec_main.php?success=welcome Lecturer');
                        }
                        if($row['role']=='group'){
                            header('Location: ../group/group_main.php?success=welcome student');
                        }
                    }
                    

                        // session_start();
                        // $_SESSION['role']=$role;
                        // $_SESSION['name']=$name;
                        // $_SESSION['reg_no']=$reg_no;
                        // $_SESSION['email']=$email;
                        // if($role=='student'){
                        //     header('Location: ../personal_main.php?success=welcome student');
                        // }
                        // if($role=='lecturer'){
                        //     header('Location: ../personal_main.html?success=welcome Lecturer');
                        // }
                        // if($role=='group'){
                        //     header('Location: ../personal_main.html?success=welcome student');
                        // }
                        
                    }
                    // header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }

else{
    header("Location: ../signup.php?error=Sorry_try_again");
    exit();
}