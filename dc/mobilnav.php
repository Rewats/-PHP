<nav class="mobilnav ">

    <div class="burger2">


        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>

    </div>



    <ul class="nav-links2">


        <h5 class="text-center" style="padding-top: 20px;">YÜKSELİŞTE OLAN KONULAR</h5>



        <?php

        while ($satirlar = mysqli_fetch_assoc($sorgu5)) { ?>


             
            <a href="main.php?SK=3&ID=<?php echo $satirlar["id"]  ?>"><label class="hot text-center ">
                    <p class="float-left" style="padding-left:5px ; color:black"><?php echo $satirlar["oySayi"]  ?></p><?php echo $satirlar["konuBaslik"] ?>

                </label>
            </a>
        <?php } ?>







    </ul>




    <ul class="nav-links">
        <h5 class="text-center" style="padding-top: 20px;">EN YÜKSEK KONULAR</h5>


        <?php

        while ($satirlar = mysqli_fetch_assoc($sorgu3)) { ?>



            <a href="main.php?SK=3&ID=<?php echo $satirlar["id"]  ?>"><label class="hot text-center \"> <b class="float-left" style="padding-left:5px ;"><?php echo $satirlar["oySayi"]  ?></b><?php echo $satirlar["konuBaslik"] ?>

                </label>
            </a>


        <?php } ?>


    </ul>
    <div class="burger">


        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>


<script>
    const navSlide = () => {

        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');


        const burger2 = document.querySelector('.burger2');
        const nav2 = document.querySelector('.nav-links2');

        const navLinks2 = document.querySelectorAll('.nav-links2 li');



        burger.addEventListener('click', () => {

            nav.classList.toggle('nav-active');
            nav2.classList.remove('nav-active2');



            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';

                } else {
                    link.style.animation = `navLinkFade  0.5s ease forwards ${index / 5.5}s`;
                }

            });


        });

        burger2.addEventListener('click', () => {

            nav2.classList.toggle('nav-active2');
            nav.classList.remove('nav-active');



            navLinks2.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';

                } else {
                    link.style.animation = `navLinkFade2 1s ease forwards ${index / 5.5}s`;
                }

            });


        });




    }

    navSlide();
</script>