<?php 
include ("../../includes/dbh.inc.php");
if(isset($_POST['post'])){
    $radio = $_POST['radio'];
    $comments =$_POST['comments'];
    $stud_reg_no = $_GET['regno'];
    $sql = "INSERT into comments (approval,comments,stud_reg_no) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'sss',$radio,$comments,$stud_reg_no);
    mysqli_stmt_execute($stmt);
    // $result =mysqli_stmt_get_result($stmt);
    // $row = mysqli_fetch_assoc($result);
    header("location:".$_SERVER['HTTP_REFERER']);
}

else{
    echo "there seems to be an error";
}