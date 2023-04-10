<?php
session_start();
if(empty($_SESSION['role'])){
    header("Location: login.php?msg=You have no role");
}
else if(($_SESSION['role'])!=='lecturer'){
    header("Location: ../../login.php?msg=You have no access");
}
include ("../../includes/dbh.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lec_personal.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <title>Personal Projects</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">KABARAK PROJECT MANAGEMENT</a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <!-- <img src="/images/icons8-bell-24.png" class="notif"> -->
                    <!-- <a class="nav-link" id="contact" href="#">Notifications</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="logout" href="../../login.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <table id="projects">
        
        <tr>
            <th>Student registration number</th>&nbsp;
            <th>Student name</th>&nbsp;
            <th>Date</th>&nbsp;
            
        </tr>
        
        <?php
        $sql = "SELECT * from project_progress GROUP BY stud_reg_no; ";
        $stmt =mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
         
        // // echo "<tr>";

        while ($row= mysqli_fetch_assoc($result)) {
        $student_no = $row['stud_reg_no'];
        echo "
            <tr><td><a href='lec_personalinfo.php?name=".$row['stud_name']."&regno=".$row['stud_reg_no']."'>".($row['stud_reg_no'])."</a></td>
            <td>".($row['stud_name'])."</td>
            <td>".($row['Date'])."</td><tr>

        ";
        }

        echo "</tr>";
        ?>
        <tr> <!--Needs to be a loop-->
            <td> <a href="lec_groupinfo.php">Group 1</a></td>
            <td>Group</td>
            <!-- <td>A web based application to manage the animals and sales in a dairy farm</td> -->
            <td>29/05/2023</td>
            </a>
        </tr>
    </table>

   
    <!--Social accounts - Fixed to the right-->


    <!--Scroll to top-->
    <!-- <i class="scroll-up" id="scroll-up">
        <!--Classes for styling. Ids for javascript-->
        <!-- <img src="/images/icons8-upward-arrow.gif"
        class="socicon up-arrow"
        alt="scroll-up"/>
    </i> --> 

    <!--Footer section-->
    <footer>
        <div class="socials">
            <a href="#" target="_blank">
                <img src="../../images/icons8-twitter-circled.gif" alt="twitter" loading="lazy" class="socicon"/>
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img src="../../images/icons8-instagram.gif" alt="Instagram" loading="lazy" class="socicon"/>
            </a>
            <a href="https://www.linkedin.com/in/lorraine-wambui-9982a319b/" target="_blank">
                <img src="../../images/icons8-linkedin-circled.gif" alt="Linkedin" loading="lazy" class="socicon"/>
            </a>
            <a href="https://github.com/WambiruL" target="_blank">
                <img src="../../images/icons8-github.gif" alt="Github" loading="lazy" class="socicon"/>
            </a>
        </div>
        <p class="copy">&copy; Copyright 2023</p>
    </footer>

    <!--Website scripts-->

   
    <!--Ion icons scripts-->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>