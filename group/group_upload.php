<?php
if(isset($_POST['upload'])){
    include ("../includes/dbh.inc.php");
    $file = $_FILES['file'];
    $fileName=$file['name'];
    $fileTmpName=$file['tmp_name'];
    $fileSize=$file['size'];
    $fileError=$file['error'];
    $fileType=$file['type'];
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed = array('jpg','png','jpeg','png','pdf','docx','doc','txt');
    $step =$_POST['step'];
    
    //checking validity of the extensions above and actual upload
    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<50000000){
                $fileNameNew = (uniqid('',true)).".".$fileActualExt;
                $fileDestination='uploads/'.$fileNameNew;
                session_start();
                $group_name=$_SESSION['name'];
                $group_id=$_SESSION['uname'];
                move_uploaded_file($fileTmpName,$fileDestination);
                $sql = "INSERT into team_project_progress(step,file_path,group_id,group_name) value(?,?,?,?);";
                $stmt=mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_bind_param($stmt,'ssss',$step,$fileDestination,$group_id,$group_name);
                mysqli_stmt_execute($stmt);
                header("Location: group_main.php?success=file uploaded into the database");
                
            // header("Location: personal_main.php?success=file uploaded");
            }else{
                echo "Your file is too big";
            }
        }else{
            echo "There was an error";
        }
    }else{
        echo "Invalid file format";
    }
}
else{
    echo "Error";
}