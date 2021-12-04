<?php
ob_start();
require_once("ayarlar/baglanti.php");
require_once("ayarlar/fonksiyonlar.php");
require_once("ayarlar/sayfalar.php");



?>


<?php if (isset($_REQUEST["SK"])) {
    $SayfaKoduDegeri    =    SayiliIcerikleriFiltrele($_REQUEST["SK"]);
} else {
    $SayfaKoduDegeri    =    0;
} ?>



<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/comments.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/media.css" />
    <link rel="icon" href="logo.png" type="image/x-icon"  />
    <title> DADDYCODEU </title>
</head>
<?php
    
  



    ?>
<body>


<?php require_once("mobilnav.php"); ?>

<?php 




 ?>
    <div class="split">
   
 

        <?php require_once("div1.php"); ?>
        <?php require_once("div2.php"); ?>
        
        <?php require_once("div3.php"); ?>
        

    </div>
    <!-- <button onclick="darkmode()"  class="fas fa-lightbulb myBtn"  style="outline-style: none;"></button>  --> 
  <button onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-arrow-up" aria-hidden="true"></button> 
    

   
  
    <?php /* require_once("footer.php"); */ ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script src="https://kit.fontawesome.com/b4cfd2615d.js" crossorigin="anonymous"></script>

</body>

</html>
<script> 

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 500|| document.documentElement.scrollTop > 500) {
 mybutton.style.display = "block";
} else {
 mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;


}   







</script>

<?php
$baglanti	=	null;
ob_end_flush();


?>