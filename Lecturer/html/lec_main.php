<?php
session_start();
if(empty($_SESSION['role'])){
    header("Location: ../../login.php?msg=You have no role");
}
if(!empty($_SESSION['role'])){
    
    if(($_SESSION['role'])!=='lecturer'){
        header("Location: ../../login.php?msg=You have no access");
    
    }
}

// if(empty($_SESSION['role'])){
//     header("Location: login.php?msg=You have no role");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lec_main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/Lecturer/lec_main.js"></script>
    <title>Lecturer's View</title>
</head>
<body class="lec_main">
    <section>
        <img class="triangle" src="../../images/Triangle with Circle.png" loading="lazy"/>
        <img class="square" src="../../images/Double Square.png" loading="lazy"/>
        <img class="Circle" src="../../images/Circle with Triangle.png" loading="lazy"/>
        <img class="square2" src="../../images/Double Square.png" loading="lazy"/>
    </section>
    
    
    <div id="personal">
        <a href="lec_personal.php"><button class="personal">Personal Projects</button></a>
    </div>

    <div id="group">
        <a href="lec_group.php"><button class="group">Group Projects</button></a>
    </div>

    
</body>
</html>