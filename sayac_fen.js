const baslangicDakikasi = 15; //buraya başlangıç süresi giriliyor dakika cinsinden (alerti denemek için 0.1 yaz)
let sure = baslangicDakikasi * 60; //toplam süre

const gerisayimEl = document.getElementById("gerisayim"); //html dosyasına gerisayim ismiyle bağlıyoruz

setInterval(updateGerisayim, 1000); // 1 saniyede bir süreyi güncellemeye yarıyor

function updateGerisayim() {
  const dakika = Math.floor(sure / 60);
  let saniye = sure % 60;

  saniye = saniye < 10 ? "0" + saniye : saniye; //saniye değerinin son rakamı sıfırsa değer göstermiyor,diğer durumlarda gösteriyor

  gerisayimEl.innerHTML = `${dakika}:${saniye}`;

  if (sure == 0) {
    alert(
      "Sınav süreniz bitmiştir. Sonuç sayfasına ilerlemek için OK butonunu kullanınız. "
    );
  }

  if (sure < 0) {
    window.location.href = "sonuc_fen.php"; //sonuç.html'e anasayfa butonu eklenecek
  } else {
    sure--;
  }
}
