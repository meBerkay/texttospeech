/* Written by Berkay */
<?php
$yaziyiCevir = "The importance of exercise cannot be overstated. Regular exercise is not only beneficial for physical health but also for mental health";
//YAZIYI POST İLE ÇEKİLİR. DEMO AMAÇLI BU ŞEKİLDE BELİRTİLDİ.
$yaziyiCevir = htmlspecialchars(trim($yaziyiCevir));
//GİRİLEN METNİ HTML ETİKETLERDEN AYIRIP TRİM İŞLEMİNİ GERÇEKLEŞTİRİYORUZ.
$yaziyiCevir = rawurlencode($yaziyiCevir);
file_put_contents('ses.mp3', file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$yaziyiCevir.'&tl=en-IN'));
//İLGİLİ TRANSLATE SES VERİSİNİ SES.MP3 ADINDA BİR DOSYAYA KAYDEDİYORUZ.
//NOT: $tl=en ile konuşma dilini, yanında bulunan IN girişi ile konuşma şivesini belirleyebilirsiniz :)
?>

/* İLGİLİ ELDE EDİLEN SES VERİSİNİ HTML İLE OYNATIYORUZ.*/
<audio controls>
<source src="ses.mp3" type="audio/mp3">
</audio>
