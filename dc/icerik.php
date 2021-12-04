<?php



/* if (!isset($_COOKIE["yourId"])) {
    $random = rand();
    setcookie("yourId", $random);
} */


$GelenID        =    Guvenlik($_GET["ID"]);


if (!isset($_COOKIE["user_id"])) {

    $random = rand();


    setcookie("user_id", $random);
    $cookieUpdate = mysqli_query($baglanti, "INSERT INTO users(user_id,post_id) VALUES('$random', '$GelenID')");
} else {

    $cookie  =  $_COOKIE["user_id"];
    //echo $cookie . "<br>";
}
@$post_idCondition = mysqli_query($baglanti, "SELECT * FROM users where post_id = $GelenID and user_id = $cookie");
@$rowcount3 = mysqli_num_rows($post_idCondition);

if (isset($_COOKIE["user_id"]) && $rowcount3 == 0) {
    $Update = mysqli_query($baglanti, "INSERT INTO users(user_id,post_id) VALUES('$cookie', '$GelenID')");
}

@$upvoteCond = mysqli_query($baglanti, "SELECT * FROM users where user_id = $cookie and post_id = $GelenID and upvote= 0");
@$rowcount = mysqli_num_rows($upvoteCond);
//echo $rowcount . "<br>";
@$dowvoteCond = mysqli_query($baglanti, "SELECT * FROM users where user_id = $cookie and post_id = $GelenID and downvote= 0");
@$rowcount2 = mysqli_num_rows($dowvoteCond);
//echo $rowcount2 . "<br>";


 // <div class="alert alert-secondary container text-center " style="width: 400px; position:static" role="alert">
  //      Daha önceden oyladın!
   // </div>
   



if (isset($_POST["upvote"]) && $rowcount == 1) {


    $upvoteConditionUpdate = mysqli_query($baglanti, "UPDATE users SET downvote = 0 where user_id = $cookie and post_id = $GelenID");
    $upvoteConditionUpdate2 = mysqli_query($baglanti, "UPDATE users SET upvote = 1 where user_id = $cookie and post_id = $GelenID");
    $upvoteUpdate = mysqli_query($baglanti, "UPDATE basliklar SET oySayi = oySayi+1 where id = $GelenID");
} else if (isset($_POST["downvote"]) && $rowcount == 0 && $rowcount2 == 1) {

    $downvoteUpdate = mysqli_query($baglanti, "UPDATE basliklar SET oySayi = oySayi-1 where id = $GelenID");
    $downvoteConditionUpdate = mysqli_query($baglanti, "UPDATE users SET upvote = 0 where user_id = $cookie and post_id = $GelenID");
    $downvoteConditionUpdate2 = mysqli_query($baglanti, "UPDATE users SET downvote = 1 where user_id = $cookie and post_id = $GelenID");
} else if (isset($_POST["upvote"]) && $rowcount == 0) { 
    
    $upvoteUpdate = mysqli_query($baglanti, "UPDATE basliklar SET oySayi = oySayi-1 where id = $GelenID");
    $upvoteConditionUpdate = mysqli_query($baglanti, "UPDATE users SET upvote = 0 where user_id = $cookie and post_id = $GelenID");
    echo "<div class=\"alert alert-warning container text-center \"style=\"width: 400px; position:static\" role=\"alert\">
    Daha Önce Upvoteladın!
</div>";
}



if (isset($_POST["downvote"]) & $rowcount2 == 1) {

    $downvoteConditionUpdate = mysqli_query($baglanti, "UPDATE users SET upvote = 0 where user_id = $cookie and post_id = $GelenID");
    $downvoteConditionUpdate2 = mysqli_query($baglanti, "UPDATE users SET downvote = 1 where user_id = $cookie and post_id = $GelenID");
    $downvoteUpdate = mysqli_query($baglanti, "UPDATE basliklar SET oySayi = oySayi-1 where id = $GelenID");
} else if (isset($_POST["upvote"]) && $rowcount == 1 && $rowcount2 == 0) {

    $upvoteUpdate = mysqli_query($baglanti, "UPDATE basliklar SET oySayi = oySayi+1 where id = $GelenID");
    $upvoteConditionUpdate = mysqli_query($baglanti, "UPDATE users SET upvote = 1 where user_id = $cookie and post_id = $GelenID");
    $upvoteConditionUpdate2 = mysqli_query($baglanti, "UPDATE users SET downvote = 0 where user_id = $cookie and post_id = $GelenID");
}else if (isset($_POST["downvote"]) && $rowcount2  == 0) { 
    
    $downvoteUpdate = mysqli_query($baglanti, "UPDATE basliklar SET oySayi = oySayi+1 where id = $GelenID");
    $downvoteConditionUpdate = mysqli_query($baglanti, "UPDATE users SET downvote = 0 where user_id = $cookie and post_id = $GelenID");
    
}









/*
$gelendeger = @$_POST["upvote"];
// echo $gelendeger;

$gelendeger2 = @$_POST["downvote"];
// echo $gelendeger2;

*/












if (isset($_GET["ID"])) {




    $query        =    mysqli_query($baglanti, "SELECT * FROM basliklar where id = $GelenID ");





?>


    <?php

    if (isset($_POST["id"])) {

        $deger = $_POST["id"];
        $upvote = mysqli_query($baglanti, "UPDATE basliklar SET oySayi = oySayi+1  where id = $deger");
    }


    ?>



    <?php

    while ($satirlar = mysqli_fetch_assoc($query)) {
    ?>



        <div class="icerikler text-center ">

            <p class="float-right  oySayi"  ><?php echo $satirlar["oySayi"] ?> </p>
            <form action="#" method="POST" onsubmit="" class="float-left">

                <button class="fas fa-angle-up upvote" id="upvote" style="background-color: white; border:none; outline: none;" type="submit" name="upvote" title="upvote" value="<?php echo $satirlar["id"]  ?>"><?php if (isset($_POST["upvote"])  && $rowcount == 1) {   ?>

                        <p class=""  style="color: #ff4500; font-size:15px"> +1</p> <?php } ?>
                </button>
                <button class="fas fa-angle-down downvote" id="downvote" style="background-color: white; border:none; outline: none;" type="submit" name="downvote" title="downvote" value="<?php echo $satirlar["id"]  ?>"> <?php if (isset($_POST["downvote"]) && $rowcount2 == 1) {   ?>

                        <p class=""  style="color: #336699; font-size:15px"> -1</p> <?php  } ?>
                </button>

            </form>





            <h2 class="text-center " style="padding-top:20px; font-family:Calibri;"><?php echo $satirlar["konuBaslik"] ?> </h2>

            <p class="" style="padding:20px; text-align:justify;   ;"><?php echo $satirlar["konuMesaj"]        ?> </p>


            <br>

            <br>
            



        </div>
        <p class="text-secondary float-right" style="font-size: 10px;">Yayınlanma Tarihi <?php echo $satirlar["yazmaTarihi"]  ?></p>







        </br>
        </br>
        </br>
        </br>
        </br>
        </br>


        <div class="comments" style="padding: 20px; " ></div>



    <?php } ?>






<?php } else {
    header("location:main.php");
} ?>






<script>


</script>

<script type="text/javascript">
    const comments_page_id = <?php echo $GelenID; ?>; // This number should be unique on every page
    fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
        document.querySelector(".comments").innerHTML = data;
        document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
            element.onclick = event => {
                event.preventDefault();
                document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
                document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
                document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
            };
        });
        document.querySelectorAll(".comments .write_comment form").forEach(element => {
            element.onsubmit = event => {
                event.preventDefault();
                fetch("comments.php?page_id=" + comments_page_id, {
                    method: 'POST',
                    body: new FormData(element)
                }).then(response => response.text()).then(data => {
                    element.parentElement.innerHTML = data;
                });
            };
        });
    });


    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>