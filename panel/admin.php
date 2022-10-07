<?php 


require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/style.css">
    <title></title>
</head>
<body>



<form class="form-inline" action="" method="POST">
  <div class="form-group">
    <label class="sr-only" for="email">Email address:</label>
    <input type="email" class="form-control" name="mail" id="email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="pwd">Password:</label>
    <input type="password" class="form-control" name="pass" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<script src="../app/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>

<?php 

$query = $db->query("SELECT * FROM `login` ",PDO::FETCH_ASSOC);


if ( $query->rowCount() ){
    foreach( $query as $row ){
    }
}


@$mail = $_POST["mail"];
@$pass = $_POST["pass"];


/* Control Check */

if ($mail == $row["mail"] && $pass == $row["password"]) {

    echo "Login İşlemi Başarılı";
    //header("Refresh: 5; url=index.php"); 

        header("Refresh: 5; url=index.php"); 
    

} else {
    return false;
}


?>


