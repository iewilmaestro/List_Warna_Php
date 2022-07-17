# List_Warna_Php

[![Youtobe: iewil](https://img.shields.io/youtube/channel/subscribers/UCvBSqRaT6nsPvtl8m6GaQpg?style=social)](https://youtube.com/c/iewil)
[![Github: iewil](https://img.shields.io/github/followers/iewilmaestro?style=social)](https://github.com/iewilmaestro)
[![Telegram: iewil](https://img.shields.io/badge/Telegram-Iewil-green?style=social&logo=Telegram)](https://t.me/iewil57)
<br>

### Install
```php
$ pkg update && pkg upgrade
$ pkg install git
$ pkg install php
$ termux-setup-storage
$ git clone https://github.com/iewilmaestro/List_Warna_Php
$ php run.php
```

### Tes
```php
//Mewarnai string
$string = "Hello World";
$warna_string = "black";
$warna_latar = "blue";


//Tes 1 string
print color($string ,$warna_string , $warna_latar) . "\n\n";

//Test semua warna string
foreach ( array_keys(List_Warna_String) as $warna_string ){ 
	foreach( array_keys(List_Warna_Latar) as $warna_latar ){
		print color($string,$warna_string, $warna_latar) . "\t";
	}
	print "\n";
}
```
### Hasil
<img align='center' src="https://github.com/iewilmaestro/List_Warna_Php/blob/main/colors.png" width="1100" title="example">

![Donation: iewil](https://img.shields.io/badge/💰-Donation-blue?style=flat-square)<br>
![BTC: iewil](https://img.shields.io/badge/BTC-18jswG2t9EZrnHju5dyiYw1yGbkcrTSgJg-blue?style=flat-square&logo=bitcoin)
![Paypal: iewil](https://img.shields.io/badge/Paypal-Purna.iera@gmail.com-blue?style=flat-square&logo=paypal)
![Dana: iewil](https://img.shields.io/badge/Dana-085819008551-blue?style=flat-square&logo=idr)
