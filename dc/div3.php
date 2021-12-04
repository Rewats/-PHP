<div class="div3 container">
    <div class="">
        <h5 class="text-center" style="padding-top: 100px;">EN YÜKSEK KONULAR</h5>


        <?php

        while ($satirlar = mysqli_fetch_assoc($sorgu2)) { ?>



            <a href="main.php?SK=3&ID=<?php echo $satirlar["id"]  ?>"><label class="hot text-center \">  <p class="float-left" style="padding-left:5px ; color:black"><?php echo $satirlar["oySayi"]  ?></p><?php echo $satirlar["konuBaslik"] ?>

                </label>
            </a>
        <?php } ?>

    </div>


</div>