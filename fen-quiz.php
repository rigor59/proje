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
  <link rel="icon" type="image/x-icon" href="fen_favicon.png">
  
  <title>FEN BİLİMLERİ SINAV</title>



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


<link rel="stylesheet" href="yazi_tip.css">

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
                  <a style="margin-left: 5px;" class="call_to-btn" href="fen3.html">GERİ</a>
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
    
    
    var message="FEN BİLİMLERİ SINAVI"
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
<!-- <center><h3 style="color:#007bff">FEN BİLGİSİ SINAVI</h3></center> -->
<div style="margin-left: 150px;">
<br> 

<div class="kolon sag" id="gerisayim" >
  <script src="sayac_fen.js"></script>
  </div>




  <form action="sonuc_fen.php" method="POST">
<div class="kolon sol" id="border">
<b>1) Dünyamız ile ilgili aşağıda verilen ifadelerden hangisi <mark>doğrudur</mark> ?</b>
<br><br> 

    <input type="radio" id="kara" name="fe" value="Dünyanın büyük bölümü karalarla kaplıdır." />  
    <label for="kara">Dünyanın büyük bölümü karalarla kaplıdır.</label><br>
    <input type="radio" id="deniz" name="fe" value="Dünyanın büyük bölümü denizlerle kaplıdır." />  
    <label for="deniz">Dünyanın büyük bölümü denizlerle kaplıdır.</label><br> <!-- doğru şık-->
    <input type="radio" id="yasam" name="fe" value="Dünyada yaşam sadece karadadır." />  
    <label for="yasam">Dünyada yaşam sadece karadadır.</label><br>

</div><br><br>

<div class="kolon sol" id="border">
<b>2)</b> <q> Dünyamızı oluşturan tabakalardan en içte   <input type="text" id="cvp_1" name="cvp_1" value=""> tabakası yer alır.</q> &nbsp; <b>  Cümlesindeki boşluğu doldurun.(taş,hava,su)</b> <br> <!-- cevap taş -->
</div><br><br>

<div class="kolon sol" id="border">
<b>3) <img src="fens_3.png" style=" width: 25%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> <br>
  Aşağıdakilerden hangisi atmosferin görevlerinden <mark>değildir</mark> ?</b><br><br>

  <input type="radio" id="gunes" name="fen" value=" Dünyayı güneşin zararlı ışınlarından korur." />  
  <label for="gunes"> Dünyayı güneşin zararlı ışınlarından korur.</label><br>
  <input type="radio" id="buhar" name="fen" value="Kar, yağmur, rüzgâr, buharlaşma gibi hava olayları bu katmanda gerçekleşir." />  
  <label for="buhar">Kar, yağmur, rüzgâr, buharlaşma gibi hava olayları bu katmanda gerçekleşir.</label><br> 
  <input type="radio" id="kcanlı" name="fen" value=" Kara canlıları bu katman üzerinde yaşar." />  
  <label for="kcanlı"> Kara canlıları bu katman üzerinde yaşar.</label><br> <!-- doğru şık-->

</div><br><br>

<div class="kolon sol" id="border">
<b>4) Aşağıdakilerden hangisi işitme duyu organımızdır?</b><br><br>

  <input type="radio" id="dil" name="fen_" value=" Dil" />  
  <label for="dil"> Dil</label><br>
  <input type="radio" id="kulak" name="fen_" value="Kulak" />  
  <label for="kulak">Kulak</label><br> <!-- doğru şık-->
  <input type="radio" id="burun" name="fen_" value=" Burun" />  
  <label for="burun"> Burun</label><br>



</div><br><br>

<div class="kolon sol" id="border">
<b>5)<img src="fens_5.png" style=" width: 25%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;">
  <br> Gözlerimiz bozuk olduğunda hangisini yapmamız doğru <mark>olmaz</mark>?</b><br><br>

  <input type="radio" id="doktor" name="fenb" value="Doktora gitmeliyiz." />  
  <label for="doktor">Doktora gitmeliyiz.</label><br>
  <input type="radio" id="ilac" name="fenb" value="Doktorun tavsiye ettiği ilaçları kullanmalıyız." />  
  <label for="ilac">Doktorun tavsiye ettiği ilaçları kullanmalıyız.</label><br>
  <input type="radio" id="gozluk" name="fenb" value="Başkasının gözlüğünü kullanmalıyız." />  
  <label for="gozluk">Başkasının gözlüğünü kullanmalıyız.</label><br> <!-- doğru şık-->



</div><br><br>

<div class="kolon sol" id="border">
<b>6) Vücudumuzu basınç, sıcak, soğuk gibi dış etkilere karşı koruyan duyu organımız nedir, kutucuğa yazınız.</b><br><br>
<input type="text" id="cvp_" name="cvp_" value=""><br>
 <!--Deri--> 

 </div><br><br>

<div class="kolon sol" id="border">
<b>7) Aşağıdakilerden hangisi sallanma hareketine örnektir?</b><br><br>

  <input type="radio" id="araba" name="fenbi" value="Frene basan araba" />  
  <label for="araba">Frene basan araba</label><br>
  <input type="radio" id="tah" name="fenbi" value=" Tahterevallide oynayan çocuklar" />  
  <label for="tah"> Tahterevallide oynayan çocuklar</label><br> <!--doğru şık--> 
  <input type="radio" id="har" name="fenbi" value="Hareket etmeye başlamış asansör" />  
  <label for="har">Hareket etmeye başlamış asansör</label><br>


</div><br><br>

<div class="kolon sol" id="border">
<b> 8) </b> <img src="fens_8.png" style=" width: 16%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;">
<br> <q>Dünya’nın kendi etrafında yaptığı hareket <input type="text" id="cvp_3" name="cvp_3" value=""> hareketidir.</q> &nbsp; <b> Cümlesindeki boşluğu doldurunuz. (hızlanma,dönme,sallanma)</b><br>
 <!--Dönme --> 
</div><br><br>

<div class="kolon sol" id="border">
<b>9) <img src="fens_9.png" style=" width: 25%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;">
  <br> Hareket halinde olan bir araba karşıdan köpek geldiğini görünce aşağıdaki hareketlerden hangisini yapar?</b><br><br>

  <input type="radio" id="hız" name="fenbil" value="Hızlanma" />  
  <label for="hız">Hızlanma</label><br>
  <input type="radio" id="yav" name="fenbil" value="Yavaşlama" />  
  <label for="yav">Yavaşlama</label><br> <!--doğru şık--> 
  <input type="radio" id="cek" name="fenbil" value="Çekme" />  
  <label for="cek">Çekme</label><br>


</div><br><br>

<div class="kolon sol" id="border">
<b>10) Aşağıdaki ifadelerden hangisi <mark>doğrudur</mark> ?</b><br><br>

  <input type="radio" id="her" name="fenbili" value="Her canlı hareket eder." />  
  <label for="her">Her canlı hareket eder.</label><br>  <!--doğru şık--> 
  <input type="radio" id="yal" name="fenbili" value="Yalnızca insanlar ve hayvanlar hareket eder." />  
  <label for="yal">Yalnızca insanlar ve hayvanlar hareket eder.</label><br>
  <input type="radio" id="bit" name="fenbili" value="Bitkiler hareket edemez." />  
  <label for="bit">Bitkiler hareket edemez.</label><br> 




</div><br><br>
<div style="text-align: end;margin-right: 80px;position: absolute; right: 0px; top: 3097px;">
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