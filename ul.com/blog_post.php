<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- jQuery library -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Latest compiled JavaScript -->



  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

  <!--google icons-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!----------------->


<style>
/*style for the text wrapping*/
.wrap {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-box-orient: vertical;
   -webkit-line-clamp: 5; /* number of lines to show */
   line-height: X;        /* fallback */
   max-height: X*N;       /* fallback */
}
/*style for the text wrapping*/
</style>


</head>
<body>
<?php
include 'conn.php';


$sql = mysqli_query($conn, "SELECT * FROM images ");





  /*echo "<p>".$row['title']."</p>";
  echo "<hr>";
  echo "<p>".$row['text']."</p>";
echo "</div>";

echo $_SESSION['username'];

*/
?>


<?php


  ?>
<!--------------------------------------------------------------->

<?php




while($row=mysqli_fetch_array($sql))
{
$dir=$row['title'];
echo"<a href='".$row['title']."'>";
echo"<div class='w3-card-4 w3-margin w3-white'>";
 echo "<img class='img-responsive' src='images/".$row['image']."' >";
  echo "<div class='w3-container'>";
   echo" <h3><b>".$row['description']."</b></h3>";
    echo"<h5>Post date, <span class='w3-opacity'>".$row['date']."</span></h5>
  </div>";

  echo"<div class='w3-container'>
    <p class='wrap'>".$row['text']."</p>";
    echo"<div class='w3-row'>
      <div class='w3-col m8 s12'>";

      echo "
        <p><button class='w3-button w3-padding-large w3-white w3-border' href='".$row['title']."'> <b>READ MORE »</b></button></p>
      </div>
      <div class='w3-col m4 w3-hide-small'>
        <p><span class='w3-padding-large w3-right'><b>share  </b> <span class='w3-tag'>0</span></span></p>
      </div>
    </div>
  </div>
</div>
<br><br></a>";



    //  <!--con_close-->

}//while close
?>

</body>
</html>
