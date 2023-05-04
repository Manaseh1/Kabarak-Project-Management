<?php
session_start();
if(empty($_SESSION['role'])){
    header("Location: ../login.php?msg=You have no role");
}
else if(($_SESSION['role'])!=='student'){
    header("Location: ../login.php?msg=You have no access");
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personal_main.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <title>Personal</title>
</head>
<body>
    <!--SideBar-->
    <div class="sidenav">
        <h3 class="heading1">Project Management</h3>
        <span class="personal_info">  Name:<?php echo $_SESSION['name']?> <br> <br> 
            Reg.No:<?php echo $_SESSION['uname']?>
        </span>
        <!-- <span class="personal_info">  Project_title: A session variable will be used </span> -->
        <!-- <a href="#download">Upload Document</a> -->
    
        <!-- <a href="#link">Project Link</a> -->
        <a href="../logout.php">Log Out

        </a>
    </div>

    <div class="topnav">
        <!-- <button type="submit" class="btn"><img src="images/search-icon.jpg" class="search" alt="icon"></button>
        <input type="text" placeholder="Search for projects here"> -->
    </div>

    <hr class="horizontal_line">

    <div class="topnav2">
        <h4 class="projects_sub">Projects submitted</h4>
        <p class="welcome">Hi, Welcome to Project management page
        </p>
        <form action="uploads.php" class="form2">
            <!-- <input hidden type="text" name="stud_reg_no" value ="<?php echo $_SESSION['uname'] ?>">
            <label for="project title">Project Title </label>
            <input type="text" name="project-title" placeholder="Enter project title"> -->
            <!-- <button>submit</button> -->
        </form>
    </div>

    <div class="card-container">
        <div class="row col1">
        <div class="column">
              <div class="card">
                <img class="icon2" src="../images/icon1.png">
                <form method="POST" action="uploads.php" enctype="multipart/form-data">
                    <input type="file" name="file" id="fileToUpload">
                    <input type="hidden" name="step" value="1">    
                    <p class="step2">Step one: concept paper</p>
                    <p>Concept paper</p>
                    <button name="upload" class="download2" type="submit">upload</button>
                </form>
                <?php
                $new_url ='../Lecturer/html/lecture_comments.php?reg_no='.$_SESSION['uname'];
                ?>
              
                <p class="lec_comments"><a href="<?php echo $new_url?>">Lecturer's Comments:</a></p>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <img class="icon2" src="../images/icon2.png">
                <form method="POST" action="uploads.php" enctype="multipart/form-data">
                    <input type="file" name="file" id="fileToUpload">
                    <input type="hidden" name="step" value="2">    
                    <p class="step2">Step Two: Chapter 1</p>
                    <p>Introduction</p>
                    <button name="upload"class="download2" type="submit">upload</button>
                </form>
                <p class="lec_comments"><a href="<?php echo $new_url?>">Lecturer's Comments:</a></p>
              </div>
            </div>
            <div class="column">
                <div class="card">
                    <img class="icon2" src="../images/icon3.png">
                   
                    <form method="POST" action="uploads.php" enctype="multipart/form-data">
                        <input type="file" name="file" id="fileToUpload">
                        <input type="hidden" name="step" value="3">    
                        <p class="step2">Step Three: Chapter 2 </p>
                        <p>Literature Review</p>
                        <button name="upload"class="download2" type="submit">upload</button>
                    </form>
                  
                   
                    <p class="lec_comments"><a href="<?php echo $new_url?>">Lecturer's Comments:</a></p>
                </div>
            </div>
        </div>
        <div class="row col2">
            <div class="column">
                <div class="card">
                    <img class="icon2" src="../images/icon4.jpg">
                    <!-- <p class="step2">Step Four: Chapter 3</p>
                    <p>Research Methodology</p> -->
                    <form method="POST" action="uploads.php" enctype="multipart/form-data">
                    <input type="file" name="file" id="fileToUpload">
                        <input type="hidden" name="step" value="4">
                        <p class="step2">Step three: Chapter 3 </p>
                        <p>Research Methodology</p>
                        <button name="upload" class="download2" type="submit">upload</button>
                    </form>

                    <p class="lec_comments"><a href="<?php echo $new_url?>">Lecturer's Comments:</a></p>
  
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img class="icon2" src="../images/icon5.jpg">
                    <!-- <p class="step2">Step Four: Chapter 4</p>
                    <p>Implentation</p> -->
                    <form method="POST" action="uploads.php" enctype="multipart/form-data">
                        <input type="hidden" name="step" value="5">
                        <input type="file" name="file" id="fileToUpload">
                        <p class="step2">Step four: Chapter 4</p>
                        <p>Implementation</p>
                        <button name="upload"class="download2" type="submit">upload</button>
                    </form>
                    <p class="lec_comments"><a href="<?php echo $new_url?>">Lecturer's Comments:</a></p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img class="icon2" src="../images/icon6.png">
                    <!-- <p class="step2">Step Five: Chapter 5</p>
                    <p>Conclusion</p> -->
                    <form method="POST" action="uploads.php">
                        <input type="hidden" name="step" value="6">
                        <input type="file" name="file" id="fileToUpload">    
                        <p class="step2">Step five: Chapter 5 </p>
                        <p>Conclusion</p>
                        
                        <button name="upload" class="download2" type="submit">upload</button>
                    </form>

                    <p class="lec_comments"><a href="<?php echo $new_url?>">Lecturer's Comments:</a></p>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>