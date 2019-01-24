<?php 
    include("Template/header.php");
    include("Template/navbar.php");
    include("config.php");

    $query = "  SELECT * 
                FROM `day`
                ORDER BY views DESC
                LIMIT 5
            ";
    
    $result = mysqli_query($conn, $query);

    

?>

<link rel="stylesheet" href="style.css">

<body background="back2.jpg">

<div class="row " style="margin-top:100px">
    <div class="col-4">
    </div>
    <div class="col-4">
    <div class="card text-center">
        <div class=" card-header bg-info" >
            <h5 style="margin-bottom:-0px" class="text-white" > Hasil </h5>
        </div>
        <div class="card-body text-left">
            <?php
            if(mysqli_num_rows($result)){
                echo "Viewer terbanyak pada : ";
                while($row = mysqli_fetch_array($result)){
                    echo "<br />";  
                    print "hari "."<strong>".$row['publish_wday']."</strong>";
                }
            }
            ?> 
        </div>
    </div>
</div>
    <div class="col-4">
    </div>
</div>
