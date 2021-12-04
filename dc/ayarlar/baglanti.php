<?php 
 $baglanti  = mysqli_connect("localhost", "root", "", "dc");
 mysqli_set_charset($baglanti, "utf-8");
 if (mysqli_connect_errno()) {

	 echo "Veritabanına bağlantı kurulamadı" . "<br>";
	 echo "Hata : " . mysqli_connect_error() . "<br>";
	 die();
 } 

$tarihSaat = date("d-m-Y h:i:sa");

$dünTarih = date('d-m-Y h:i:sa' ,strtotime("-1 days"));


$sorgu		=	mysqli_query($baglanti,"SELECT * FROM basliklar order by id DESC");



$sorgu2		=	mysqli_query($baglanti,"SELECT * FROM basliklar order by oySayi DESC  LIMIT 10");



$sorgu3		=	mysqli_query($baglanti,"SELECT * FROM basliklar order by oySayi DESC  LIMIT 10 ");


$sorgu4	=	mysqli_query($baglanti,"SELECT * FROM basliklar order by oySayi DESC LIMIT 10");

$sorgu5	=	mysqli_query($baglanti,"SELECT * FROM basliklar where oySayi between 20 and 50");

$sorgu6	=	mysqli_query($baglanti,"SELECT * FROM basliklar where oySayi between 20 and 50");


$sorgu7		=	mysqli_query($baglanti,"SELECT * FROM basliklar ");
















?>