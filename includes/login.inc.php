<?php
if(isset($_POST['login'])){
    //$post variables
    require "dbh.inc.php";
    $password =$_POST['pwd'];
    $unamemail = $_POST['UsernameEmail'];
    //error checkers
    if(empty($unamemail)||empty($password)){
        header("Location: ../login.php?error=emptyfields&unamemail".$unamemail);
        exit();
    }
    else{
        $sql = "SELECT * FROM users where user_email=?";
        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../login.php?error=Sqlerror");
                exit();
        }
        else{
                mysqli_stmt_bind_param($stmt,"s",$unamemail);
                mysqli_stmt_execute($stmt);
                $result=mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $pascheck = password_verify($password,$row['password']);
                    if($pascheck ==false){
                        header("Location: ../login.php?error=wrongpword");
                        exit();
                    }
                    elseif($pascheck == true){
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name']=$row['name'];
                        $_SESSION['uname']=$row['reg_no'];
                        $_SESSION['role']=$row['role'];
                        if($row['role']=='student'){
                            header('Location: ../Personal/personal_main.php?success=welcome student');
                        }
                        if($row['role']=='lecturer'){
                            header('Location: ../Lecturer/html/lec_main.php?success=welcome Lecturer');
                        }
                        if($row['role']=='group'){
                            header('Location: ../group/group_main.php?success=welcome group_leader');
                        }
                        
                        exit();
                    }
                
                }
                else{
                    header("Location: ../login.php?error=wrongpasswords");
                
                }
            }
    
         }
}
else{
   // header("Location: ../login.php?connerror");
    //exit();
}
// include ("dbh.inc.php");
// if(isset($_POST['UsernameEmail']) && isset($_POST['password'])){
//     function test_input($data){
//             $data =trim($data);
//             $data =stripslashes($data);
//             return $data;
//         }
//     $username =test_input($_POST['UsernameEmail']);
//     $password =test_input($_POST['password']);
//     if(empty($username)){
//         header("Location: ../login.php?error=Registration number required");
//     }
//     elseif(empty($password)){
//         header("Location: ../login.php?error=Password is required");
//     }
//     else{
//         echo "cool";
//     }
// }
// else{
//     header("Location: ../login.php?error=Nothing_isset");
//} 
// if(isset($_POST['login'])){
//     //$post variables
//     include ("dbh.inc.php");
//     $password =$_POST['password'];
//     $reg_noemail = $_POST['RegnoEmail'];

//     //error checkers
//     if(empty($reg_noemail)||empty($password)){
//         header("Location: ../login.php?error=emptyfields&reg_noemail".$reg_noemail);
//         exit();
//     }
//     else{
//         $sql = "SELECT * FROM users where reg_no=? OR user_email=?;";
//         $stmt =mysqli_stmt_init($conn);
//         if(!mysqli_stmt_prepare($stmt,$sql)){
//                 header("Location: ../login.php?error=Sqlerror");
//                 exit();
//         }
//         else{
//                 mysqli_stmt_bind_param($stmt,'ss',$reg_noemail,$reg_noemail);
//                 mysqli_stmt_execute($stmt);
//                 $result=mysqli_stmt_get_result($stmt);
//                 if($row = mysqli_fetch_assoc($result)){
//                     $pascheck = password_verify($password,$row['password']);
//                     if($pascheck ==false){
//                         header("Location: ../login.php?error=wrongpAword");
//                         exit();
//                     }
//                     elseif($pascheck == true){
//                         session_start();
//                         $_SESSION['id'] = $row['id'];
//                         $_SESSION['name'] = $row['name'];
//                         $_SESSION['reg_no']=$row['reg_no'];
//                         $_SESSION['role']=$row['role'];
//                         header('Location: ../login.php?login=success');
//                         exit();
//                     }
                
//                 }
//                 else{
//                     header("Location: ../login.php?error=wrongpasswords");
                
//                 }
//             }
    
//          }
// }
// else{
//     header("Location: ../login.php?connerror");
//     exit();
// }