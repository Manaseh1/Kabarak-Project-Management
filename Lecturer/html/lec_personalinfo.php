<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);
session_start();
if(empty($_SESSION['role'])){
    header("Location: ../../login.php?msg=You have no role");
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
    <link rel="stylesheet" href="../css/lec_groupinfo.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Personal Info</title>
</head>
<body class="container">
    <!--SideBar-->
    <div class="row flex-nowrap d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 px-sm-2 px-0 sidenav">
    <span class="personal_info">NAME: <?php echo $_GET['name']?> <br> <br> <?php echo $_GET['regno']; ?></span>
    <a href="lec_group.php">Home</a>
    <!-- <a href="#download">Upload Document</a> -->
    <a href="../../logout.php">Log Out</a> 
    </div>

    <hr class="horizontal_line">

    <div class="topnav2">
        <h4 class="projects_sub">Projects submitted</h4>
        <p class="welcome">Hi, Welcome to Project management page
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 p-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="icon2" src="../../images/icon1.png">
                    <p class="card-title">Step One</p>
                    <?php
                // $conn=mysqli_connect("localhost","root","","team_project");
                $regno=$_GET['regno'];
                $url="comments.php?regno=".$regno;
                $sql="select * from project_progress where step=1 and stud_reg_no='$regno'";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($query); 
                $file_link=$row['file_path'];
                ?>
                    <p class="card-text">Concept Paper</p>
                    <button class="download2" type="submit"><a href="<?php echo '/Team_project2/'.$file_link;?>" download>DOWNLOAD</a></button>
                    
                    <form  action="<?php echo $url ?>" method="POST" class="form">
                        <div class="mb-1 form-check">
                          <input type="radio" class="form-check-input" value ="Approved"name="radio" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Approved</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="radio" class="form-check-input" value ="Disapproved"name="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Disapproved</label>
                          </div>
                        <div class="input-group" id="comments">
                            <span class="input-group-text" id="color">Comments</span>
                            <textarea class="form-control" name="comments" aria-label="With textarea"></textarea>
                        </div>
                        <button class="post" name ="post" type="submit">POST</button>
                      </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="icon2" src="../../images/icon2.png">
                    <p class="card-title">Step Two: Chapter 1</p>
                    <?php
                // $conn=mysqli_connect("localhost","root","","team_project");
                $regno=$_GET['regno'];
                $url="comments.php?regno=".$regno;
                $sql="select * from project_progress where step=1 and stud_reg_no='$regno'";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($query); 
                $file_link=$row['file_path'];
                ?>
                    <p class="card-text">Introduction</p>
                    <button class="download2" type="submit"><a href="<?php echo '/Team_project2/'.$file_link;?>" download>DOWNLOAD</a></button>
                    
                    <form  action="<?php echo $url ?>" method="POST" class="form">
                        <div class="mb-1 form-check">
                          <input type="radio" class="form-check-input" value ="Approved"name="radio" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Approved</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="radio" class="form-check-input" value ="Disapproved"name="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Disapproved</label>
                          </div>
                        <div class="input-group" id="comments">
                            <span class="input-group-text" id="color">Comments</span>
                            <textarea class="form-control" name="comments" aria-label="With textarea"></textarea>
                        </div>
                        <button class="post" name ="post" type="submit">POST</button>
                      </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="icon2" src="../../images/icon3.png">
                    <p class="card-title">Step Three: Chapter 2</p>
                    <?php
                // $conn=mysqli_connect("localhost","root","","team_project");
                $regno=$_GET['regno'];
                $url="comments.php?regno=".$regno;
                $sql="select * from project_progress where step=3 and stud_reg_no='$regno'";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($query); 
                $file_link=$row['file_path'];
                ?>
                    <p class="card-text">Literature Review</p>
                    <button class="download2" type="submit"><a href="<?php echo '/Team_project2/'.$file_link;?>" download>DOWNLOAD</a></button>
                    
                    <form  action="<?php echo $url ?>" method="POST" class="form">
                        <div class="mb-1 form-check">
                          <input type="radio" class="form-check-input" value ="Approved"name="radio" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Approved</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="radio" class="form-check-input" value ="Disapproved"name="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Disapproved</label>
                          </div>
                        <div class="input-group" id="comments">
                            <span class="input-group-text" id="color">Comments</span>
                            <textarea class="form-control" name="comments" aria-label="With textarea"></textarea>
                        </div>
                        <button class="post" name ="post" type="submit">POST</button>
                      </form>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="icon2" src="../../images/icon4.jpg">
                    <p class="card-title">Step four: Chapter 3</p>
                    <?php
                // $conn=mysqli_connect("localhost","root","","team_project");
                $regno=$_GET['regno'];
                $url="comments.php?regno=".$regno;
                $sql="select * from project_progress where step=4 and stud_reg_no='$regno'";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($query); 
                $file_link=$row['file_path'];
                ?>
                    <p class="card-text">Research methodology</p>
                    <button class="download2" type="submit"><a href="<?php echo '/Team_project2/'.$file_link;?>" download>DOWNLOAD</a></button>
                    
                    <form  action="<?php echo $url ?>" method="POST" class="form">
                        <div class="mb-1 form-check">
                          <input type="radio" class="form-check-input" value ="Approved"name="radio" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Approved</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="radio" class="form-check-input" value ="Disapproved"name="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Disapproved</label>
                          </div>
                        <div class="input-group" id="comments">
                            <span class="input-group-text" id="color">Comments</span>
                            <textarea class="form-control" name="comments" aria-label="With textarea"></textarea>
                        </div>
                        <button class="post" name ="post" type="submit">POST</button>
                      </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="icon2" src="../../images/icon5.jpg">
                    <p class="card-title">Step Five: Chapter 4</p>
                    <?php
                // $conn=mysqli_connect("localhost","root","","team_project");
                $regno=$_GET['regno'];
                $url="comments.php?regno=".$regno;
                $sql="select * from project_progress where step=5 and stud_reg_no='$regno'";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($query); 
                $file_link=$row['file_path'];
                ?>
                    <p class="card-text">Implentation</p>
                    <button class="download2" type="submit"><a href="<?php echo '/Team_project2/'.$file_link;?>" download>DOWNLOAD</a></button>
                    
                    <form  action="<?php echo $url ?>" method="POST" class="form">
                        <div class="mb-1 form-check">
                          <input type="radio" class="form-check-input" value ="Approved"name="radio" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Approved</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="radio" class="form-check-input" value ="Disapproved"name="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Disapproved</label>
                          </div>
                        <div class="input-group" id="comments">
                            <span class="input-group-text" id="color">Comments</span>
                            <textarea class="form-control" name="comments" aria-label="With textarea"></textarea>
                        </div>
                        <button class="post" name ="post" type="submit">POST</button>
                      </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img class="icon2" src="../../images/icon6.png">
                    <p class="card-title">Step Six: Chapter 5</p>
                    <?php
                // $conn=mysqli_connect("localhost","root","","team_project");
                $regno=$_GET['regno'];
                $url="comments.php?regno=".$regno;
                $sql="select * from project_progress where step=6 and stud_reg_no='$regno'";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($query); 
                $file_link=$row['file_path'];
                ?>
                    <p class="card-text">Conclusion</p>
                    <button class="download2" type="submit"><a href="<?php echo '/Team_project2/'.$file_link;?>" download>DOWNLOAD</a></button>
                    
                    <form  action="<?php echo $url ?>" method="POST" class="form">
                        <div class="mb-1 form-check">
                          <input type="radio" class="form-check-input" value ="Approved"name="radio" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Approved</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="radio" class="form-check-input" value ="Disapproved"name="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Disapproved</label>
                          </div>
                        <div class="input-group" id="comments">
                            <span class="input-group-text" id="color">Comments</span>
                            <textarea class="form-control" name="comments" aria-label="With textarea"></textarea>
                        </div>
                        <button class="post" name ="post" type="submit">POST</button>
                      </form>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
</body>
</html>