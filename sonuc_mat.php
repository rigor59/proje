<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" type="image/x-icon" href="mat_favicon.png">
  <title>MATEMATİK SONUCU</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="http://fonts.cdnfonts.com/css/fff-galaxy" rel="stylesheet">




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
<img style="position:fixed;left: 417px;z-index:-1;width:700px" src="images/cizgi.png">
  <div class="sub_pages ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a style="position:fixed;top:68px;left:220px" class="call_to-btn" href="index.html">
            <img  src="images/logo.png" alt="">
            <span >
              HYS
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <div class="d-flex justify-content-center mt-5">
                  <a style="margin-left: 5px;" class="call_to-btn" href="index.html"> HOME</a>
                </li>
                 

                
              </ul>
              
            </div>
        </nav>
      </div>
    </header>
  </div>
          <p style="position:fixed ;top: 200px;left:568px; color:#082465;font-size:45px;font-weight:bold;text-align:center;height:400px;width:400px;">
          <?php 
error_reporting(0);

$puan=0;
      if($_POST["m"] == "316"){
         $puan+=10;
        //echo $s1,"<br>";
  
      }
     
      if($_POST["cvp_6"] == "1010" ){
        $puan+=10;
      } 
      
      
      if($_POST["ma"] == "9"){
         $puan+=10;
        //echo $s1,"<br>";
  
      }
      if($_POST["mat"] == "214"){
         $puan+=10;
      }
      
      
      if($_POST["mate"] == " 12 + 26 = 26" && $_POST["mate1"] == " 15 + 13 = 27"){  
         $puan+=10;
      }
      
     

      if($_POST["cvp_7"] == "30" ){
         $puan+=10;
      }

      if($_POST["matem"] == "30"){
         $puan+=10;
      }
      if($_POST["matema"] == "10"){
         $puan+=10;
      }
      if($_POST["cvp_8"] == "132" ){
        $puan+=10;
     }

      if($_POST["matemat"] == "27"){
         $puan+=10;
      }
   
//echo "Aldığınız puan : " , $puan; 
$servername = "localhost";
$database = "hilal_db";
$username = "yunus";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
/*if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully  ", "<br>"; */

$sql="INSERT INTO hesap (puan_) VALUES ('$puan')";
$sonuc=mysqli_query($conn,$sql);
 //$sonuc= $conn->query("SELECT *FROM hesap");
$sorgu2=$conn->query("SELECT isim,soy_isim FROM kayit  Order By id DESC LIMIT 1; ");
$ciktii = $sorgu2->fetch_array();
$sorgu= $conn->query("SELECT * FROM hesap Order By id DESC LIMIT 1;");
$cikti = $sorgu->fetch_array();
echo "<p style='margin-top:50px;text-transform: capitalize; color:white;font-size:75px;font-weight:bold;text-align:center'>" .$ciktii["isim"] ."<br>" .$ciktii["soy_isim"] ."<br>" ;
echo "<p style=' color:white;font-size:50px;font-weight:bold;text-align:center'> Puan: " . $cikti["puan_"] ;

/* if (mysqli_query($conn, $sql)) {
      //echo "Sınav sayfasına yönlendiriliyorsunuz..."; 
      
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/



mysqli_close($conn);

?>
          </p>
          <div class="hero_btn-continer">
          
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            
          </div>
        </div>
      </div>
    </section>
  </div>

<body>
  
    

        
      
</body>

</html>

