<?php 
include("parts/header.php");
include("parts/navbar2.php");

?>

<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white text-right">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class="p-5 text-center bg-light ">
     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         
          <button class="btn btn-primary me-md-2" type="button">Lista</button>
          
      </div>
    
    <div class="row row-cols-1 row-cols-md-4 g-2 justify-content-md-center">
  <div class="col">
    <div class="card h-28">
      
      <div class="card-body">
        <h4 class='title'><a href='sura_detaljno.php?id=$id'><span class='badge badge-pill badge-info'> 1 </span><br><br>  Kratki vokali / Elif (Hemze) </a></h4>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-28">
      
      <div class="card-body">
        <h4 class='title'><a href='sura_detaljno.php?id=$id'><span class='badge badge-pill badge-info'> 1 </span><br><br>  Harf Waw </a></h4>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
   <div class="card h-28">
      
      <div class="card-body">
        <h4 class='title'><a href='sura_detaljno.php?id=$id'><span class='badge badge-pill badge-info'> 1 </span><br><br> Harf Dal i Zal </a></h4>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
   
  </div>
  <!-- Jumbotron -->
</header>