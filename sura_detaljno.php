<?php

include("parts/header.php");
include("parts/navbar2.php");

$con = mysqli_connect("localhost","quran","ayswMKF8Dj5EcWcs","quran");
//provjera ID-a iz URL-a.
if(isset($_GET['id'])){
    
    $id = mysqli_real_escape_string($con, $_GET['id']);
    
    //sql upit.
    $sql = "SELECT * FROM sura WHERE id = $id";
      $sql = "SELECT * FROM quran_ar WHERE SuraID = $surahToGo ORDER BY id";
    
    //dobijanje rezultata iz upita
    $result = mysqli_query($con, $sql);
    
    //stavljanje rezultata u niz
    $sura = mysqli_fetch_assoc($result);
    
    mysqli_free_result($result);
    mysqli_close($con);
    
  // print_r($sura);


}






?>

<br><br>
<hr>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
<!--<link rel="stylesheet" href="parts/temeboja.css">-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="parts/promjenateme.js"></script>-->
<script>
    function play() {
        var audio = document.getElementById('audio');
        if (audio.paused) {
            audio.play();
            $('#play').removeClass('glyphicon-play-circle')
            $('#play').addClass('glyphicon-pause')
        }else{
            audio.pause();
            audio.currentTime = 0
            $('#play').addClass('glyphicon-play-circle')
            $('#play').removeClass('glyphicon-pause')
        }
    }
</script>
<audio src="http://185.50.56.145:8888/download?filename=/www/wwwroot/185.50.56.145/hadis/audio/bekara.mp3&play=true" id="audio"></audio>

<script>
    
    $(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
            $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
        });
        
</script>

<div class="container">
    <div class="row">
        <div class="col-lg-12 my-2">
            <div class="pull-right text-center">
               
                <div class="btn-group">
                    <button class="btn btn-outline-light">
                         <i class="fa fa-sun-o" aria-hidden="true"> Dan</i>
                    </button>
                    <button class="btn btn-outline-dark">
                       <i class="fa fa-moon-o" aria-hidden="true"> Noć</i>
                    </button>
                    
                </div>
               
            </div>
            <a href="" class="btn btn-outline-success"><i class="fa fa-cog"> Postavke</i></a>
        </div>
    </div> 
    <div id="products" class="row view-group">
                <div class="item col-xs-4 col-lg-12">
                    <div class="thumbnail card">
                        
                        <div class="caption card-body">
                            <?php if($sura): ?>
                            <h4 class="col-12 text-center arabic">
                                
                                        بِسْــــــــــــــــــمِ اﷲِالرَّحْمَنِ الرحيم.    
                            </h4>
                            <p class="group inner list-group-item-text">
                                <?php  echo htmlspecialchars($sura['AyahText']); ?></p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead"style="color: red;">
                                       Broj ajeta: <?php  echo htmlspecialchars($sura['AyahText']); ?></p>
                                
                                </div>
                                
                                <div class="col-xs-12 col-md-6">
                                    <button class="btn btn-success" id="play" onclick="play()"><i class="fa fa-play" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <?php else: ?>
                                <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
               
                
            </div>
</div>
<hr>

<br><br>







<?php include("parts/footer.php"); ?>