<div class="d-flex justify-content-center ">
    <div class="aramakutu  ">
        <form action="main.php?SK=4" method="POST">

            <input type="text" name="aramaIcerik" class="aramatext " placeholder="Konu Ara" />
            <button class="aramabuton" type="submit" href="#">
                <i class="fas fa-search"></i>
            </button>

        </form>


    </div>
</div>

<?php



    while ($satirlar = mysqli_fetch_assoc($sorgu)) { ?>




        <div class=" text-center " id="basliklar">



            <a href="main.php?SK=3&ID=<?php echo $satirlar["id"]  ?>">

                <label class="basliklar text-center"> <?php echo $satirlar["konuBaslik"];  ?></label>

            </a>








            <br>
            <br>

        </div>






<?php

    }
 ?>





