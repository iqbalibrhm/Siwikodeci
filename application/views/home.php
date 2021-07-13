<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>My Trip My Hobby</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <a class="navbar-brand" href="#">
                        <img src="MTMH.png" alt="" srcset="">
                        <span id="logo">Sistem Informasi Wisata Kota Depok</span>
                    </a>
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item active mr-3">
                  <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                  <a class="nav-link" href="#about-us">Tentang</a>
                </li>
                <li class="nav-item mr-3">
                  <a class="nav-link" href="<?php base_url()?>index.php/login/login">LOGIN</a>
                </li>
              
              </ul>
            </div>
        </div>
      </nav>


      <section id="hero">
          <div class="container">
              <div class="row header">
                <div class="col">
                <h1>My Trip My Hobby!</h1>    
                <p>Merupakan sebuah platform yang memberikan informasi tentang wisata dan kuliner yang ada di kota Depok. Yuk cari tahu ada apa aja sih di kota itu??</p>
                <button class="btn btn-ptimary btn-lg">Learn More</button>
                </div>
                <div class="col">
                    <img class="img-fluid" src="img/header.jpg" alt="" srcset="">
              
                </div>
              </div>


              <div class="row cards">
                  <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img class="icon" src="img\icon-wisata-png-2.png">
                            <h5 class="card-title">Wisata</h5>
                            <p class="card-text">Lokawisata, tempat wisata atau objek wisata adalah sebuah tempat rekreasi/tempat berwisata. Objek wisata dapat berupa objek wisata alam seperti gunung, danau, sungai, pantai, laut, atau berupa objek wisata bangunan seperti museum, benteng, situs peninggalan sejarah, dll.</p>
                       
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img class="icon" src="img\fJbpJ36X_400x400.png">
                            <h5 class="card-title">Kuliner</h5>
                        <p class="card-text">Kuliner tradisional Indonesia adalah semua jenis masakan yang berasal dari berbagai daerah di seluruh Negara Kesatuan Republik Indonesia. Resep dan cara pembuatan kuliner tradisional biasanya bersifat turun temurun. Rasa kuliner tradisional yang khas dari satu daerah akan berbeda dengan daerah lainnya.</p>
                       
                        </div>
                      </div>
                  </div><div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img class="icon" src="img\Depok Logo Vector.png">
                            <h5 class="card-title">Kota Depok</h5>
                          <p class="card-text">Kota Depok adalah sebuah kota di Provinsi Jawa Barat. Kota ini terletak tepat di selatan Jakarta, yakni antara Jakarta dan Bogor. Dahulu Depok adalah kecamatan dalam wilayah Kabupaten Bogor, yang kemudian mendapat status kota pada tanggal 27 April 1999. </p>
                       
                        </div>
                      </div>
                  </div>

              </div>
          </div>
      </section>

      <!-- about us-->


      <section id="about-us">
        <div class="container">
            <div class="row align-content-center">
                <div class="col">
                    <img src="img/header.jpg" alt="" class="img-fluid">
                </div>
                <div class="col">
                    <h1>Tentang kami</h1>
                    <p>Kami menyediakan berbagai informasi mengenai wisata serta kuliner yang berada di kota Depok. Disini, ada banyak sekali tempat-tempat menarik.
                    Lalu, kamu bisa mencari apa saja yang ingin kamu kunjungi di kota Depok. </p>
                    <button class="btn btn-primary btn-lg">Meet Us</button>
                </div>
            </div>
        </div>
      </section>

      <!-- Projects-->
      <section id="projects">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="text-center">Berbagai wisata dan kuliner</h1>
                </div>  
            </div>
            
            <div class="row align-items-center">
                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="img\banner4.jpg">
                        <div class="card-body">
                          <h5 class="card-title">Green Lake View Waterpark.</h5>
                          <p class="card-text">Area rekreasi keluarga di tepi danau yang indah dengan tempat untuk berenang, air mancur & perosotan tabung.</p>
                          <a href="#" class="btn btn-primary">More</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="img\lokasi-d-kandang-amazing-farm-sawangan-depok.jpg">
                        <div class="card-body">
                          <h5 class="card-title">D'Kandang Amazing Farm</h5>
                          <p class="card-text">Pusat rekreasi dengan hewan ternak & pameran tanaman, ATV & kursus memanah.</p>
                          <a href="#" class="btn btn-primary">More</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="img\Taman-Wisata-Pasir-Putih-Depok-ghoza-affan.jpg" >
                        <div class="card-body">
                          <h5 class="card-title">Taman Wisata Pasir Putih</h5>
                          <p class="card-text">Taman Wisata Pasir Putih, sebuah destinasi rekreasi air yang digemari masyarakat. Fasilitasnya yang lengkap membuat tempat ini tidak pernah sepi pengunjung.</p>
                          <a href="#" class="btn btn-primary">More</a>
                        </div>
                      </div>
                </div>  
            </div>
            
            
            <div class="row align-items-center">
                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="img\taman_nusantara_cianjur-630x380.jpg">
                        <div class="card-body">
                          <h5 class="card-title">Taman Bunga Wiladatika</h5>
                          <p class="card-text">Taman Wiladatika sudah menjadi salah satu referensi wisata warga Depok dan sekitarnya segera setelah diresmikan oleh Presiden Soeharto pada 29 Juni 1980</p>
                          <a href="#" class="btn btn-primary">More</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="img\Situ-Pengasinan.jpg">
                        <div class="card-body">
                          <h5 class="card-title">Situ Pengasinan Depok</h5>
                          <p class="card-text">Situ Pengasinan berada di Kelurahan Pengasinan, Sawangan, Depok. Letaknya persis berada di Jalan Utomo No. 19-22, Kelurahan Pengasinan, Sawangan, Kota Depok.</p>
                          <a href="#" class="btn btn-primary">More</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="img\060700000_1450349277-masjid_7.jpg">
                        <div class="card-body">
                          <h5 class="card-title">Masjid Kubah Emas</h5>
                          <p class="card-text">Masjid Dian Al Mahri dikenal juga dengan nama Masjid Kubah Emas [1] adalah sebuah masjid yang dibangun di tepi jalan Raya Meruyung, Limo, Depok di Kecamatan Limo, Depok.</p>
                          <a href="#" class="btn btn-primary">More</a>
                        </div>
                      </div>
                </div>  
            </div>
            
      
        </div>
        
      
      </section>

      <section id="footer">
      <div class="container" style="text-align: center; color: white;">
        <div class="copyright">
          &copy; Developed By <strong><span>Mahasiswa</span></strong>. 
          All Rights Reserved 2021
        </div>
      </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>