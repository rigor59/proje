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
  <title>MATEMATİK SINAV</title>
  

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
  <div class="top_container sub_pages ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img style="margin-top: 30px;" src="images/logo.png" alt="">
            <span style="margin-top: 30px;">
              ANASAYFA
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
                 <li class="nav-item active">
                <div class="d-flex justify-content-center mt-5">
                  <a style="margin-left: 5px;" class="call_to-btn" href="mat3.php">GERİ</a>
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
  <div id="baslık">
    <script language="JavaScript1.2">
    
    
    var message="MATEMATİK SINAVI"
    var neonbasecolor="rgba(25, 8, 101, 0.34)"
    var neontextcolor="#082465"
    var flashspeed=100 
    
    
    
    var n=0
    if (document.all||document.getElementById){
    document.write('')
    for (m=0;m<message.length;m++)
    document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
    document.write('')
    }
    else
    document.write(message)
    
    function crossref(number){
    var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
    return crossobj
    }
    
    function neon(){
    
    
    if (n==0){
    for (m=0;m<message.length;m++)
    
    crossref(m).style.color=neonbasecolor
    }
    
    
    crossref(n).style.color=neontextcolor
    
    if (n<message.length-1)
    n++
    else{
    n=0
    clearInterval(flashing)
    setTimeout("beginneon()",1500)
    return
    }
    }
    
    function beginneon(){
    if (document.all||document.getElementById)
    flashing=setInterval("neon()",flashspeed)
    }
    beginneon()
    
    
    </script>
    </div>
  <!-- <center><h3>İNGİLİZCE SINAVI</h3></center> -->
  <div style="margin-left: 150px;">
<br>

<div class="kolon sag" id="gerisayim" >
<script src="sayac_mat.js"></script>
</div>

<form action="sonuc_mat.php" method="POST">
<div class="kolon sol" id="border">
<b>1) <q> 1 - 3 - 6 </q> rakamlarını kullanarak oluşturulan <mark>en büyük çift sayı</mark> kaçtır?</b> <br><br> 

    <input type="radio" id="bi" name="m" value="136" />  
    <label for="bi">136</label><br>
    <input type="radio" id="al" name="m" value="613" />  
    <label for="al">613</label><br> 
    <input type="radio" id="uc" name="m" value="316" />  
    <label for="uc"> 316</label><br> <!-- doğru şık-->


</div><br><br>

<div class="kolon sol" id="border">
<b>2)814 sayısının en yakın onluğa yuvarlatılmışına 200 eklendiğinde sayı ne olur, aşağıdaki kutucuğa yazınız.</b><br><br>
    <!--burada cevap için bir kutu olacak (cevap 1010 :))  --> 
    <input type="text" id="cvp_6" name="cvp_6" value=""><br>
   

</div><br><br>

<div class="kolon sol" id="border">    
<b> 3)Üç basamaklı en büyük doğal sayının rakamları toplamı iki basamaklı en büyük doğal sayının rakamları toplamından kaç fazladır?</b><br><br>

    <input type="radio" id="do" name="ma" value="9" />  
    <label for="do"> 9</label><br>  <!-- doğru şık-->
    <input type="radio" id="se" name="ma" value="8" />  
    <label for="se">8</label><br> 
    <input type="radio" id="ye" name="ma" value="7" />  
    <label for="ye">7</label> <br>


</div><br><br>

<div class="kolon sol" id="border"> 
<b>4)</b> <img src="mat_4_soru.png" style="vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;">
<br><b> Yukarıdaki toplama işleminin sonucu kaçtır ?</b><br><br>


  <input type="radio" id="ik" name="mat" value="204" />  
  <label for="ik"> 204</label><br>
  <input type="radio" id="ik_" name="mat" value="212" />  
  <label for="ik_">212</label><br> 
  <input type="radio" id="i_" name="mat" value="214" />  
  <label for="i_"> 214</label><br> <!-- doğru şık-->


</div><br><br>

<div class="kolon sol" id="border">
<b>5)Aşağıdaki toplama işlemlerinden hangisi veya hangileri yanlıştır,seçiniz.</b><br><br>

<!-- <form action="/action_page.php"> -->
    <input type="checkbox" id="ikal" name="mate" value=" 12 + 26 = 26" />
    <label for="ikal"> 12 + 26 = 26</label><br /> <!-- doğru şık-->
    <input type="checkbox" id="seki" name="mate" value=" 18 + 22 = 40" />
    <label for="seki"> 18 + 22 = 40</label><br />
    <input type="checkbox" id="beuc" name="mate1" value=" 15 + 13 = 27" />
    <label for="beuc3"> 15 + 13 = 27</label><br> <!-- doğru şık-->
  
</div><br><br>

<div class="kolon sol" id="border">
<b>6)<b>&nbsp;&emsp;&emsp;&emsp;&emsp;45<br> &emsp;&emsp;- &emsp;&emsp;&emsp; ? <hr style=" margin-left: 30px ; margin-bottom: 0px; margin-top: 1px; height: 0.5px; width: 80px; background: black;" >&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;15</p></b> </b> <b>Yukarıdaki işlemde boş bırakılan yere hangi sayı gelmelidir ?</b><br><br>
<input type="text" id="cvp_7" name="cvp_7" value=""><br>

<!-- cevap 30 -->
</div><br><br>

<div class="kolon sol" id="border">
<b>7)<b>&nbsp;&emsp;&emsp;&emsp;&emsp;10<br> &emsp;&emsp;x &nbsp;&nbsp;&nbsp;&emsp;&emsp; 3 <hr style=" margin-left: 30px ; margin-bottom: 0px; margin-top: 1px; height: 0.5px; width: 80px; background: black;" >&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;?</p></b> </b> <b>İşleminin sonucu kaçtır ?</b><br><br>

  <input type="radio" id="ot" name="matem" value="30" />  
  <label for="ot">30</label><br>  <!--doğru şık--> 
  <input type="radio" id="ott" name="matem" value="300" />  
  <label for="ott">300</label><br> 
  <input type="radio" id="uc_" name="matem" value="3" />  
  <label for="uc_">3</label><br>

</div><br><br>

<div class="kolon sol" id="border">
<b>8) 40' ın 4' e bölümünden bölüm kaç olur ?</b><br><br>
  

    <input type="radio" id="sı" name="matema" value="0" />  
    <label for="sı">0</label><br>
    <input type="radio" id="on" name="matema" value="10" />  
    <label for="on"> 10</label><br>  <!--doğru şık--> 
    <input type="radio" id="onk" name="matema" value="12" />  
    <label for="onk">12</label><br>
  
</div><br><br>

<div class="kolon sol" id="border">
<b>9) Kalansız bir bölme işleminde bölüm 6, bölen 22 olduğuna göre bölünen kaç olur, kutucuğa yazınız.</b><br><br>
<input type="text" id="cvp_8" name="cvp_8" value=""><br>
<!-- 132-->
</div><br><br>


<div class="kolon sol" id="border">
<b>10) 6 cevizin 4 katının 3 fazlası kaç eder ?</b><br><br>


  <input type="radio" id="yır" name="matemat" value="24" />  
  <label for="yır">24</label><br> 
  <input type="radio" id="yrt" name="matemat" value="27" />  
  <label for="yrt">27</label><br> <!--doğru şık--> 
  <input type="radio" id="yı_" name="matemat" value="21" />  
  <label for="yı_">21</label><br>

  </div><br><br>
<div style="text-align: end;margin-right: 80px;position: absolute; right: 0px; top: 2910px;">
<input style="color:#082465;" type="submit" value="Gönder">
</div>
</form>

</div>

</div>
</div>


  <!-- end contact section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">

  </section>
  
</body>

</html>