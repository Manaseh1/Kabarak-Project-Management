<?php include ("../../includes/dbh.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <?php 
    $stud_reg_no =$_GET['reg_no'];
    $sql ="SELECT * FROM comments where stud_reg_no ='$stud_reg_no'";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // echo $comments;
    ?>
    <?php
    echo '  
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-0 border" style="background-color: #f0f2f5;">
            <div class="card-body p-4">
          <div class="form-outline mb-4">
          <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
          <label class="form-label" for="addANote"> <h2>Lecturer comments</h2></label>
        </div> 
        <div class="card mb-4">
          ';

        while($row = mysqli_fetch_assoc($result)){
            echo '
  
       
        <div class="card-body">
            <p>'."$row[comments]".'</p>
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <p class="small mb-0 ms-2"></p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">'."$row[approval]".'</p>
                <p class="small text-muted mb-0"></p>
              </div>
            </div>
        </div>
       
     
            ';
            
         }
         echo ' 
         </div>
         </div>
         </div>
       </div>';  ?>

</body>
</html>