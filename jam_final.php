<?php 
    include("Template/header.php");
    include("Template/navbar.php");
    include("config.php");

    $jam=$_POST['jam_input'];

    $query = "  SELECT * 
                FROM pubh
                ORDER BY views DESC
                LIMIT 5
            ";
    
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)){
        echo "Viewer terbanyak pada jam : ";
        while($row = mysqli_fetch_array($result)){  
            echo $row['publish_hour']; <br/>
        }
    }

?>