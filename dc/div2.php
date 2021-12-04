<div class="div2" >
    

<?php require_once("nav.php"); ?>

        <?php
        if ((!$SayfaKoduDegeri) or ($SayfaKoduDegeri == "") or ($SayfaKoduDegeri == 0)) {
            include($Sayfa[0]);
        } else {
            include($Sayfa[$SayfaKoduDegeri]);
        }
        ?>
    
    <?php  ?>
    
   





</div>
