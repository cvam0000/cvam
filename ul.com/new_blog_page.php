<!DOCTYPE html>
<html lang="en">

  <head>
  
  <!--google ads-->
   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1874601030502637",
    enable_page_level_ads: true
  });
</script>
    <!--google ads-->
  
  
  
  
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>untoldlogics.com</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
<link href="blog-post.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- jQuery library -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Latest compiled JavaScript -->

 <!--google icons-->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!----------------->
 <style>

.footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2

}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  white;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}



@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
</style>
  </head>
  <?php $a=basename($_SERVER['PHP_SELF']);?>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Untoldlogics</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Topics <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ethical Hacking</a></li>
                <li><a href="#">Networking</a></li>
                <li><a href="#">Malwares</a></li>
              </ul>
            </li>
            <li><a href="news.php">News</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">




<?php

include 'conn.php';

//$abc= $_SERVER['REQUEST_URI'];echo "<br>";echo "<br>";echo "<br>";
//$y=strinf_split($abc);
// [/ul/internet.php]
//substr_replace(string_name, replacement_string, start_pos, length)
//$abc=substr_replace($abc, ' ', 0,4) ;
/*
$y=str_split($abc);
for($x=0;$x<strlen($abc);$x++)
{
  if($y[$x]=='.')
   {
     $next=$x;
     break;
   }
}

    /*  while($y[$x]!='.')
            {
              $next .=$y[$x];
              $x++;
            }
#$aa='30';
$abc = substr_replace($abc, ' ', $next,4) ;*/


//$sql = "SELECT * FROM users WHERE title = '.$a.' ";
 $result = mysqli_query($conn, "SELECT * FROM images where `images`.`title`='$a'");
$row = mysqli_fetch_array($result);


          //Title
          echo"<h2 class='mt-4'>".$row['description']."</h2><hr>";
echo"

          <p class='lead'>
            by
            <a href='about.php'>Shivam chaudhary</a>
          </p>



        ";
           echo"  <p>Posted on:".$row['date']."</p>";

    echo"      <hr>";

    echo "<div id='img_div'>";
      echo "<img class='img-responsive' src='images/".$row['image']."' >";
       echo"</div>";




      echo" <br><p class='text-justify'>".$row['text']."</p>";


      ?>



          <hr>





          <!-- Comments Form -->
          <div class="card my-4">

          </div>

          <!-- Single Comment -->
          <div class="media mb-4">

          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <!--img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""-->
            <div class="media-body">


              <div class="media mt-4">
                <!--img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""-->
                <div class="media-body">

                                </div>
              </div>

              <div class="media mt-4">
                <!--img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""-->
                <div class="media-body">

                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header"></h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="index.php">Ethical hacking</a>
                    </li>
                    <li>
                      <a href="index.php">malware</a>
                    </li>
                    <li>
                      <a href="index.php">Tools</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="index.php">Networking</a>
                    </li>
                    <li>
                      <a href="index.php">Google Dorking</a>
                    </li>
                    <li>
                      <a href="index.php">Tor network</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              untoldlogics text here ....
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>














<!------------------------footer--------------->


<footer class="footer-distributed">

			<div class="footer-left">

				<img src="pics/spider4.png" width="200px"/>

				<p class="footer-links">
					<a href=index.html>Home</a>
					.
					<a href=index.html>Blog</a>
					.
					<a href=about.html>About</a>
					.

					<a href=contact.html>Contact</a>
				</p>

				<p class="footer-company-name"> Untoldlogics.com &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>KIET GZB</span> INDIA</p>
				</div>



				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="untoldlogics.com">cvam0000@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-ul-about" style="color:white">
					<span>"IF THERE IS NO LOGIC CREATE YOUR OWN"</span>

				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/cvam0000"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/shivam-chaudhary-73b370129/"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.youtube.com/channel/UC_xhr5E1xMW9dFUMW_dQiPQ"><i class="fa fa-youtube"></i></a>

				</div>

			</div>

		</footer>
  </body>

</html>
