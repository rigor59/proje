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
  <link rel="icon" type="image/x-icon" href="ing_favicon.png">
  <title>İNGİLİZCE SONUCU</title>



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

<body >
<img style="position:fixed;left: 417px;z-index:-1;width:700px" src="images/cizgi.png">
  
  <div class=" sub_pages ">
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
  <!-- end header section -->

  <!-- contact section -->

   <!-- <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
        Contact Now

      </h2>
      <p class="text-center">
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla

      </p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <form action="">
                  <div>
                    <input type="text" placeholder="Name">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div>
                    <input type="email" placeholder="Email">
                  </div>
                  <div>
                    <input type="text" placeholder="Message" class="input_message">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Send
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->
  
  <p style="position:fixed ;top: 200px;left:568px; color:#082465;font-size:45px;font-weight:bold;text-align:center;height:400px;width:400px;">
  <?php 
          
          error_reporting(0);
          
          $puan=0;
              function strtolower_turkce($cvp_1){
              $bul 	= array("I","Ğ","Ü","Ş","İ","Ö","Ç");
              $degis  = array("ı","ğ","ü","ş","i","ö","ç");
              $cvp_1	= str_replace($bul, $degis, $cvp_1);
              $cvp_1	= strtolower($cvp_1);
              return $cvp_1;
          }
                if($_POST["f"] == "brother"){
                   $puan+=10;
                
            
                }
               
                if(strtolower_turkce($_POST["cvp_4"]) == "teacher" ){
                  $puan+=10;
                } 
                
                
                if($_POST["fa"] == "Who is she ?"){
                   $puan+=10;
                
            
                }
                if($_POST["fav"] == "Can he play basketball ? "){
                   $puan+=10;
                }
                if($_POST["fav_"] == "Black - White"){
                   $puan+=10;
                }
                
                if(strtolower_turkce($_POST["cvp_5"]) == "he can run fast" ){
                   $puan+=10;
                }
          
                if($_POST["fav_l"] == "Can"){
                   $puan+=10;
                }
                if($_POST["fav_la"] == " What are you doing"){
                   $puan+=10;
                }
                if($_POST["fav_lan"] == "I feel suprised."){
                   $puan+=10;
                }
                if($_POST["fav_lang"] == "happy"){
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
          echo "<p style='margin-top:50px;text-transform: capitalize; color:white;font-size:75px;font-weight:bold;text-align:center'>" .$ciktii["isim"] ."<br>" ."&nbsp;".$ciktii["soy_isim"] ;
          echo "<p style=' color:white;font-size:50px;font-weight:bold;text-align:center'> Puan: " . $cikti["puan_"] ;
          
          /* if (mysqli_query($conn, $sql)) {
                //echo "Sınav sayfasına yönlendiriliyorsunuz..."; 
                
          } else {
                //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }*/
          
          
          
          mysqli_close($conn);
          
          
          ?>
    </p>
  



  <!-- end contact section -->

  
  </script>
  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
  
</body>

</html>