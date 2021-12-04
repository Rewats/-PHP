<?php
$IPAdresi				=	$_SERVER["REMOTE_ADDR"];
$ZamanDamgasi			=	time();
$TarihSaat				=	date("d.m.Y H:i:s", $ZamanDamgasi);
$SiteKokDizini			=	$_SERVER["DOCUMENT_ROOT"];
$ResimKlasoruYolu		=	"/Resimler/";
$VerotIcinKlasorYolu	=	$SiteKokDizini.$ResimKlasoruYolu;

function TarihBul($Deger){
	$Cevir				=	date("d.m.Y H:i:s", $Deger);
	$Sonuc				=	$Cevir;
	return $Sonuc;
}



function RakamlarHaricTumKarakterleriSil($Deger){
	$Islem				=	preg_replace("/[^0-9]/", "", $Deger);
	$Sonuc				=	$Islem;
	return $Sonuc;
}

function TumBosluklariSil($Deger){
	$Islem				=	preg_replace("/\s|&nbsp;/", "", $Deger);
	$Sonuc				=	$Islem;
	return $Sonuc;
}

function DonusumleriGeriDondur($Deger){
	$GeriDondur			=	htmlspecialchars_decode($Deger, ENT_QUOTES);
	$Sonuc				=	$GeriDondur;
	return $Sonuc;
}

function Guvenlik($Deger){
	$BoslukSil			=	trim($Deger);
	$TaglariTemizle		=	strip_tags($BoslukSil);
	$EtkisizYap			=	htmlspecialchars($TaglariTemizle, ENT_QUOTES);
	$Sonuc				=	$EtkisizYap;
	return $Sonuc;
}


function SayiliIcerikleriFiltrele($Deger){
	$BoslukSil			=	trim($Deger);
	$TaglariTemizle		=	strip_tags($BoslukSil);
	$EtkisizYap			=	htmlspecialchars($TaglariTemizle, ENT_QUOTES);
	$Temizle			=	RakamlarHaricTumKarakterleriSil($EtkisizYap);
	$Sonuc				=	$Temizle;
	return $Sonuc;
}






