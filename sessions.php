<?php
session_start();
if(empty($_SESSION['role'])){
    header("Location: login.php?msg=You have no role");
}
else if(($_SESSION['role'])!=='group'){
    header("Location: group_main.php?msg=Hello group");
}
else if(($_SESSION['role'])=='student'){
    header("personal_main.php?");
}
else if(isset($_SESSION['role'])=='lecturer'){
    header("Location: Lecturer/html/lec_main.php?msg=Hello group");
}