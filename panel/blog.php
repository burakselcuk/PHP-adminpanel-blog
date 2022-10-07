<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/style.css">
<body>
    
<form action="blog.php" method="GET" class="forms">
  <div class="form-group">
    <label for="exampleFormControlInput1">Ad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ad" placeholder="admin">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Konu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="konu" placeholder="Linux ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Başlık</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="baslik" placeholder="Linux Nedir ?">
  </div>

  </div>

<div class="form-group shadow-textarea">
  <label for="exampleFormControlTextarea6">İcerik</label>
  <div class="palet">
    <div class="code">
      <select name="" id="palet">,
        <option value="1" class="kod">Code</option>
        <option value="2" class="kod">B</option>
        <option value="3" class="kod">i</option>
      </select>
    </div>
  </div>
  <textarea class="form-control z-depth-1 texts" id="exampleFormControlTextarea6" name="icerik" rows="3" placeholder="Write something here..."></textarea>
</div>

  <button type="submit" class="btn btn-primary">Gönder</button>
</form>
  <script src="../app/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>
<?php 
require_once "db.php";


$ad = @htmlspecialchars($_GET["ad"]);
$konu = @htmlspecialchars($_GET["konu"]);
$baslik = @htmlspecialchars($_GET["baslik"]);
$icerik = @$_GET["icerik"];

if ($ad=="" || $konu == "" || $baslik == "" || $icerik == "") {
    die("Boş içerik");
    return false;
} 
else  {

    $query = $db->prepare("INSERT INTO blog  SET
ad = ?,
konu = ?,
baslik = ?,
icerik = ?");
$insert = $query->execute(array(
     "$ad", "$konu", "$baslik","$icerik"
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
    exit;
    header("Refresh: 5; url=index.php"); 
}

}

?>