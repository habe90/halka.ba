<?php 

include_once("functions.php");


include("parts/header.php");
include("inc/db.php");
include("parts/navbar.php");

// if(!empty($_GET['id'])) {
    
//     $url = 'http://api.alquran.cloud/v1/surah'.$_GET['id'].'ar.asad';
//     $ch = curl_init();
//     //////////////////
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     //postavljanje url-a
//     curl_setopt($ch, CURLOPT_URL,$url);
//     //Izvrši
//     $result = curl_exec($ch);
//     //zarvori
//     curl_close($ch);
    
    
//     //dumpiranje iz json-a
//     $data = json_decode($result,true);
    
//     if(!empty($data) && $data['status'] == 'OK') {
        
//         print_r($data['data']['surahs']);
//     }
// }

?>
       
  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Popularne pretrage</h2><br>
            <?php 
           $sql = 'SELECT * FROM quran_words LIMIT 5 ';
           $stmt = $conn->prepare($sql);
           $stmt->execute();
           
            while ( $row = $stmt->fetch()) {
                
                echo "<button type='button' class='btn btn-outline-success' >".$row['simple']."</button>";
            }
           
          ?>
         
          
          <form action="search.php" method="post" class="form-inline justify-content-end" >
            
             <input type="text" name="search" id="search" class="form-control mr-sm-2" placeholder="Pretraga..." autocomplete="off" required>
            <input type="submit" name="submit" value="Pretraga" class="btn btn-outline-success my-2 my-sm-0">
            
          </form>
          
          <div class="col-sm-2" style="position:relative;margin-top:-0px;margin-left:800px;">
           <div class="list-group" id="show-list">
                
                
                
            </div>
            </div>
          
        </div>
        
           
            
       
        
          
         
         
        <div class="row">
           
            
          
        <?php
            $sql = 'SELECT * FROM quran_words';
           $stmt = $conn->prepare($sql);
           $stmt->execute();
           $data = $stmt->fetchAll();
           while ($row = $stmt->fetch()) {
                echo $row['id']."<br />\n";
                $id = $row['id'];
                $naziv_sure = $row['position'];
                //$broj_ajeta = $row['ajet'];
               // $opis_sure = $row['kratki_opis'];
                 echo "<div class='col-lg-4 col-md-6 mt-2 arbic'>";
                echo "<div class='icon-box' data-aos='zoom-in-left'>";
                 echo "<div class='icon'><i class='las la-play' style='color: #41cf2e;'></i></div>";
                echo "<h4 class='title'><a href='sura_detaljno.php?id=$id'><span class='badge badge-pill badge-info'> $id </span>  $naziv_sure </a></h4>";
                echo "<p class='description'>Sura Test</p>";
                echo "</div>";
                 echo "</div>";
            
           }
          ?>
         
            
          
         
        <!-- <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="las la-play" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href=""><span class="badge badge-pill badge-info">2</span> El-Bekara</a></h4>
              <p class="description">Krava</p>
             <p class="text-right">
                  <img src="img/sura2.png" width="100px" height="50px">
              </p>
              
            </div>
          </div>-->

          <!--<div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="las la-play" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href=""> <span class="badge badge-pill badge-info">3</span> El Imran</a></h4>
              <p class="description">Porodica imranova</p>
            </div>
          </div>-->
         <!-- <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="las la-play" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href=""><span class="badge badge-pill badge-info">4</span> En-Nisa</a></h4>
              <p class="description">Žene || سورة النساء</p>
            </div>
          </div>-->

         <!-- <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="las la-play" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href=""><span class="badge badge-pill badge-info">5</span> El-Maida </a></h4>
              <p class="description">Trpeza || سورة المائدة</p>
            </div>
          </div>-->
          <!--<div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="las la-play" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href=""><span class="badge badge-pill badge-info">6</span> El-En'am</a></h4>
              <p class="description"> Stoka || سورة الأنعام </p>
            </div>
          </div>-->
        </div><br><br>

      </div>
    </section><!-- End Services Section -->
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
    
  
    
    <?php include("parts/footer.php"); ?>
    
    
   