<?php


if (isset($_POST["aramaIcerik"])) {
    $gelenAramaIcerik        =    Guvenlik($_POST["aramaIcerik"]);



    $sorgu5    =    mysqli_query($baglanti, "SELECT * FROM basliklar where konuBaslik like '%$gelenAramaIcerik%' ");

    $etkilenenKayitSayisi = mysqli_affected_rows($baglanti);
}






?>




<?php

if ($etkilenenKayitSayisi > 0 && $gelenAramaIcerik ==! "") {

    while ($satirlar = mysqli_fetch_assoc($sorgu5)) { ?>






        <div class=" text-center ">

           

            <a href="main.php?SK=3&ID=<?php echo $satirlar["id"]  ?>">

                <label class="basliklar text-center"> <?php echo $satirlar["konuBaslik"] ?></label>

            </a>
         





            <br>
            <br>

        </div>




    <?php

    }
} else { ?>

    <div class="alert alert-dark container text-center " style="width: 400px; position:static" role="alert">
        Kayıt Bulunamadı.
    </div>
<?php } ?>