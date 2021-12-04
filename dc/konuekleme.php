<?php if (@$_POST['gonder'] == 1) {
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesaj'];



    if (empty($konu) == true || empty($mesaj) == true) { ?>
        <?php $page = $_SERVER['PHP_SELF'];
        echo '<meta http-equiv="Refresh" content="2;' . $page . "?SK=1 " .  '">'; ?>

        <div class="alert alert-dark container text-center " style="width: 400px; position:static" role="alert">
            Alanları Doldurunuz!
        </div>

<?php

    }



    $uzunluk = strlen($mesaj);


    if (empty($konu) == false && empty($mesaj) == false && strpos($mesaj, ' ') == true) {


        $eklemeSorgusu        =    mysqli_query($baglanti, "INSERT INTO basliklar(konuBaslik,konuMesaj) VALUES (UPPER('$konu'), '$mesaj') ");


        header('Location:main.php?SK=0');
        exit( );
    } else if (strpos($mesaj, ' ') == false && empty($konu) == false && empty($mesaj) == false ) { ?>
       <div class="alert alert-warning container text-center " style="width: 400px; position:static" role="alert">
            Lütfen boşluk bırakarak yazınız!
        </div>
    <?php }
}
?>



<div class="container formdiv  justify-content-center">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
        <h2>Contact</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form id="contact-form" class="form" action="#" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="email">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="message">Message</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>                                 
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">Send Message</button>
              </div>
          </form>
      </div>
  </div>
</div>



<script> 
$(document).ready(function() {
	// Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(function(){
            $(this).addClass('js-hide-label');
        });  

        // Code for adding/removing classes here
        $('.form-group').find('input, textarea').on('keyup blur focus', function(e){
            
            // Cache our selectors
            var $this = $(this),
                $label = $this.parent().find("label");
					
						switch(e.type) {
							case 'keyup': {
								 $label.toggleClass('js-hide-label', $this.val() == '');
							} break;
							case 'blur': {
								if( $this.val() == '' ) {
                    $label.addClass('js-hide-label');
                } else {
                    $label.removeClass('js-hide-label').addClass('js-unhighlight-label');
                }
							} break;
							case 'focus': {
								if( $this.val() !== '' ) {
                    $label.removeClass('js-unhighlight-label');
                }
							} break;
							default: break;
						}
						// previous implementation with ifs
            /*if (e.type == 'keyup') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label'); 
                } else {
                    $parent.removeClass('js-hide-label');   
                }                     
            } 
            else if (e.type == 'blur') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label');
                } 
                else {
                    $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                }
            } 
            else if (e.type == 'focus') {
                if( $this.val() !== '' ) {
                    $parent.removeClass('js-unhighlight-label');
                }
            }*/
        });
    } 
});


 </script>