<?php 

require_once "db.php";

$query = $db->query("SELECT * FROM blog", PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/style.css">
</head>
<body>
    
    <div class="listblog">
         <div class="blogitem">
            <?php 
            if ( $query->rowCount() ){
                foreach( $query as $row ){
                    echo "<div class='blogitem'>";
                    echo "<h6> Ad: ".$row["ad"]."<br> Başlık:".$row["baslik"]."</h6>";
                    echo "<p class='icerik'>". $row["icerik"]."</p>";
                    echo "</div>";
                }
           }           

            ?>
         </div>

        

         
    </div>
    
    
    
    <script src="..//app/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
</body>
</html>

 