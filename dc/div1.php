<div class="div1 container">
    <?php $tarihSaat = date("d-m-Y h:i:sa");

    $dunTarih = date('d.m.Y h:i:sa', strtotime("-1 days")); ?>
    <div class="">
        <h5 class="text-center" style="padding-top: 100px;">YÜKSELİŞTE OLAN KONULAR</h5>

        <?php

        while ($satirlar = mysqli_fetch_assoc($sorgu6)) { ?>



            <a href="main.php?SK=3&ID=<?php echo iconv( "UTF-8" , "ISO-8859-9" ,$satirlar["id"])  ?>"><label class="hot text-center \">
                    <p class="float-left" style="padding-left:5px ; color:black"><?php echo $satirlar["oySayi"]  ?></p><?php echo $satirlar["konuBaslik"] ?>

                </label>
            </a>
        <?php } ?>












    </div>

</div>


<?php
