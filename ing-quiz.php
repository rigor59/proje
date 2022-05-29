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
  <title>İNGİLİZCE SINAV</title>



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
                  <a style="margin-left: 5px;" class="call_to-btn" href="ing3.php">GERİ</a>
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
    
    
    var message="İNGİLİZCE SINAVI"
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
<script src="sayac_ing.js"></script>
</div>
  
<form action="sonuc_ing.php" method="POST">
  <div class="kolon sol" id="border" ><b>1) '' r t h o r b e '' harflerinden oluşan doğru kelime aşağıdakilerden hangisidir?</b> <br><br> 
    
        <input type="radio" id="be" name="f" value="betrhor" />  
        <label for="be">betrhor</label><br>
        <input type="radio" id="bro" name="f" value="brother" />  
        <label for="bro">brother</label><br> <!-- doğru şık-->
        <input type="radio" id="bo" name="f" value="borther" />  
        <label for="bo"> borther</label><br>
  
    </div><br><br>


<div class="kolon sol" id="border">
<b>2)</b> &nbsp; <b>-</b> Sister <br>
    &nbsp;&nbsp;&emsp; <b>-</b> Father <br>
    &nbsp;&nbsp;&emsp; <b>-</b> Teacher <br>
    <b>Kelimelerinden hangisi diğerlerinden <mark>farklıdır</mark> ,kutucuğa yazınız.</b><br><br>
    <!-- Teacher--> 
    
    
    <input type="text" id="cvp_4" name="cvp_4" value=""> 
    
  
  </div><br><br>
<div class="kolon sol" id="border">
<b>3)</b><img src="ings_3.png" style=" width: 8%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> 
<br> <b>Umut:</b> ___________ <br> <b>Murat:</b> She is my sister. <br>

<b>İfadesinde boş bırakılan yere aşağıdakilerden hangisi getirilmelidir?</b><br><br>


    <input type="radio" id="how" name="fa" value=" How old are you ?" />  
    <label for="how"> How old are you ?</label><br>
    <input type="radio" id="whe" name="fa" value=" Where are you ?" />  
    <label for="whe"> Where are you ?</label><br> 
    <input type="radio" id="who" name="fa" value="Who is she ?" />  
    <label for="who">Who is she ?</label><br> <!-- doğru şık-->
  
</div><br><br>



<div class="kolon sol" id="border">
<b>4)</b><img src="ings_4.png" style=" width: 12%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> 
  <br> <b>Emrah:</b> _____ ?<br>

<b>Deniz:</b> Yes, he can.<br>

 <b>Boş bırakılan yere uygun gelen ifade hangisidir?</b><br><br>

 

  <input type="radio" id="ıs" name="fav" value="  Is he old." />  
  <label for="ıs">  Is he old.</label><br>
  <input type="radio" id="ca" name="fav" value="Can he play basketball ? " />  
  <label for="ca">Can he play basketball ? </label><br> <!-- doğru şık-->
  <input type="radio" id="hw" name="fav" value=" How old is he ?" />  
  <label for="hw"> How old is he ?</label><br>

</div><br><br>
<div class="kolon sol" id="border">
<b>5)Karşıt anlamlı kelimeler aşağıdaki şıklardan hangisinde doğru verilmiştir?</b><br><br>



  <input type="radio" id="s-b" name="fav_" value="Slow - Big" />  
  <label for="s-b">Slow - Big</label><br>
  <input type="radio" id="f-t" name="fav_" value="Fast - Tall" />  
  <label for="f-t">Fast - Tall</label><br>
  <input type="radio" id="b-w" name="fav_" value="Black - White" />  
  <label for="b-w">Black - White</label><br>  <!-- doğru şık-->

</div><br><br>

<div class="kolon sol" id="border">
<b>6)</b><img src="ings_6.png" style=" width: 8%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> 
<br> <b> '' Run / can / he / fast ''  Karışık verilen kelimeleri cümle olarak nasıl yazarız, kutunun içine yazın.</b><br><br>


<input type="text" id="cvp_5" name="cvp_5" value=""><br>

  
<!-- He can run fast. -->
</div><br><br>

<div class="kolon sol" id="border">
<b>7)</b><img src="ings_7.png" style=" width: 8%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> 
<br> He ___ play football.<br>
<b>  Boş bırakılan yere hangisi gelmelidir?</b><br><br>


  <input type="radio" id="no_" name="fav_l" value="No" />  
  <label for="no_">No</label><br>
  <input type="radio" id="it" name="fav_l" value="Isn't" />  
  <label for="tah"> Isn't</label><br> 
  <input type="radio" id="cn" name="fav_l" value="Can" />  
  <label for="cn">Can</label><br>  <!--doğru şık--> 

</div><br><br>

<div class="kolon sol" id="border">
<b>8)</b><img src="ings_8.png" style=" width: 10%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> 
<br> Seda : ____ ? <br>
  Selin : I' m eating a hamburger.<br>
  
  <b>Boş bırakılan yere hangisi gelmelidir?</b><br><br>
  

    <input type="radio" id="yo" name="fav_la" value=" Who are you" />  
    <label for="yo"> Who are you</label><br>
    <input type="radio" id="wht" name="fav_la" value=" What are you doing" />  
    <label for="wht"> What are you doing</label><br>  <!--doğru şık--> 
    <input type="radio" id="na" name="fav_la" value="What is your name" />  
    <label for="na">What is your name</label><br>
  
  </div><br><br>

<div class="kolon sol" id="border">
<b>9)</b><img src="ings_9.png" style=" width: 10%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> 
<br> <b>'' surprised / I / feel '' Verilen kelimelerin doğru sıralanışı hangi seçenekte verilmiştir? </b><br><br>


  <input type="radio" id="ı_" name="fav_lan" value="I surprised feel." />  
  <label for="ı_"> I surprised feel.</label><br>
  <input type="radio" id="fe" name="fav_lan" value="Feel I suprised." />  
  <label for="fe">Feel I suprised.</label><br>
  <input type="radio" id="ı" name="fav_lan" value="I feel suprised." />  
  <label for="ı">I feel suprised.</label><br>  <!--doğru şık--> 

</div><br><br>

<div class="kolon sol" id="border">
<b>10) </b><img src="ings_10.png" style=" width: 11%; height: auto ; vertical-align: top;margin-left: 20px;margin-bottom: 20px; margin-top: -5px;"> 
<br>This is Ayşe's birthday<br>

  She is very _______<br>
  
  <b>Cümleyi tamamlayacak cevap hangi seçenekte doğru verilmiştir?</b><br><br>

 

  <input type="radio" id="ti" name="fav_lang" value="tired" />  
  <label for="ti">tired</label><br> 
  <input type="radio" id="ba" name="fav_lang" value="bad" />  
  <label for="ba">bad</label><br>
  <input type="radio" id="hp" name="fav_lang" value="happy" />  
  <label for="hp">happy</label><br>  <!--doğru şık--> 

</div><br><br>

<div style="text-align: end;margin-right: 80px;position: absolute; right: 0px; top: 3670px;">
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