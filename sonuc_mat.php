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

  <title>HYS AKADEMİ</title>



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




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              HYS
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  " id="main">
                <li class="nav-item active">

                <div class="d-flex justify-content-center mt-5">
       <!-- <a href="" class="call_to-btn  ">-->
                  <a style="margin-left: 5px;" class="call_to-btn " href="index.html"><span>HOME</span></a>
                  </div>
                </li>
                <li class="nav-item">
                  <div class="d-flex justify-content-center mt-5">
                  <a style="margin-left: 5px;color: #fff;" class="call_to-btn "><span>3. SINIF</span></a>
                  </div>
                
                <ul style="line-height: 50px; margin-bottom: 15px">
                <li style="margin-bottom: 5px;margin-left: 5px;"><a href="mat.html">MATEMATİK</a></li>
                <li style="margin-bottom: 5px;margin-left: 5px;"> <a href="fen.html">FEN BİLİMLERİ</a></li>
                <li style="margin-left: 5px;"><a href="ing.php">İNGİLİZCE</a></li>
                </ul>
                </li>
                

             </ul>
            
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Hoşgeldiniz
          </h3>
          <h1>
            HYS AKADEMİ
          </h1>
          <p>
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
$username = "hilal";
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
 //= $conn->query("SELECT *FROM hesap");
$sorgu2=$conn->query("SELECT isim,soy_isim FROM kayit  Order By id DESC LIMIT 1; ");
$ciktii = $sorgu2->fetch_array();
$sorgu= $conn->query("SELECT * FROM hesap Order By id DESC LIMIT 1;");
$cikti = $sorgu->fetch_array();
echo "İsim:" .$ciktii["isim"] ."&nbsp;"."&nbsp;"."Soyisim:" .$ciktii["soy_isim"] ."<br>" ;
echo "Puan: " . $cikti["puan_"] ;

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
            <img src="images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>

<body>
  
    

        
      
</body>

</html>


