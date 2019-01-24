<?php 
    include("Template/header.php");
    include("Template/navbar.php");
    include("config.php");

    $hari=$_POST['hari_input'];

    $query = "  SELECT * 
                FROM daycat
                WHERE publish_wday = '$hari'
                ORDER BY views DESC
                LIMIT 1
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
                echo "Kategori yang memiliki viewer terbanyak pada hari ".$hari." adalah ";
                while($row = mysqli_fetch_array($result)){  
                    echo "<strong>".$row['category_id']."</strong>";
                }
            }
            ?> 
        </div>
    </div>
</div>
    <div class="col-4">
    </div>
</div>