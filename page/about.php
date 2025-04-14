<div class="col-12" style="height:100vh;background:#0242A3"  >
    <div class="container">
        <nav class="navbar fixed-top navbar-expand-lg text-white py-3" style="background:#0242A3" aria-label="Offcanvas navbar large">
            <div class="container">
                <a class="navbar-brand" href="https://hik-cargo.com/demo/"><img src="./images/logo.png" style="height:40px"></a>
                <button class="navbar-toggler  border-0 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <i class="fa-regular fa-bars-sort" style="transform: scale(-1, 1); font-size:1.8rem"></i>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark"  tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header" style="background:#0242A3" >
                        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                        <button type="button" class="btn-close btn-outline-light btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" style="background:#0242A3" >
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Tips Impor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/demo/about">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Informasi Lainnya</a>
                            </li>
                            <li class="nav-item px-2 py-sm-3 py-md-0 gap-4">
                                
                                <a href="#" class="btn secondary-bg rounded-5 px-3 me-2">Register</a>
                                <a href="#" class="btn btn-outline-light secondary-border rounded-5 px-3">Login</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <style>
            .about-header{
                padding-top: 40px;
            }
            .about-sub-header{
                padding-top: 20px;
            }
        </style>
        <div class="d-flex align-items-center py-3" style="height:100vh">
            <div class="row d-flex align-items-center about-header">
                <div class="col-md-5 text-white about-sub-header">
                    <h4 class="fw-bold" style="font-size:">Tentang Kami</h4>
                    <h2 class="fw-bold" style="font-size:">Hidup Inti Karya Cargo</h2>
                        <p style="font-size:14px">Pada [Tahun Pendirian], Hidup Inti Karya Cargo didirikan dengan tujuan untuk mendominasi sektor pelayaran dan logistik. Bisnis kami, yang berkantor pusat di [Lokasi Kantor Pusat], telah berkembang untuk melayani klien di seluruh dunia.</p>
                    
                    <h5 class="fw-bold" style="font-size:">Visi</h5>
                        <p style="font-size:13px">Menjadikan perusahaan kami sebagai mitra logistik terkemuka yang menawarkan solusi komprehensif dan mutakhir untuk kebutuhan pengiriman dan distribusi internasional.</p>
                    <h5 class="fw-bold" style="font-size:">Misi</h5>
                        <ol style="font-size: 13px">
                            <li>Menyediakan layanan cargo yang handal, efisien, dan terjangkau</li>
                            <li>Menerapkan teknologi canggih untuk meningkatkan efisiensi operasional dan kepuasan pelanggan</li>
                            <li>Mengutamakan keamanan dan keandalan dalam setiap tahapan pengiriman</li>
                            <li>Membangun hubungan jangka panjang dengan pelanggan, mitra, dan komunitas lokal</li>
                        </ol>
                </div>
                <div class="col-md-7 pt-5">
                    <img src="./images/img-cover.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-value {
        width: 220px;
        height: 250px;
        border-radius: 30px;
        background: #fdfdfd;
        box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
        padding: 25px;
        margin: 10px;
        transition: all 0.5s ease;
    }
    .card-value:hover{
        background: #3b928d;
        box-shadow: 15px 15px 30px #37795e, -15px -15px 30px #ffffff;
        border: black 1px solid;
        transition: all 0.5s ease;
        color: white;
    }
    .sub-cardtitle{
        font-size: 20px;
        font-weight: 700;
        /*margin-bottom: 7px;*/
    }
    .sub-title{
        font-size: 25px;
        font-weight: 700;
        color:#0242A3
    }
    .sub-cardparagraf{
        font-size: 14px;
        margin-top: 7px;
    }
    .sub-paragraf{
        font-size: 15px;
        font-weight: 400;
    }
    .bg-hik {
        width: 100%;
        height: auto;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        overflow: hidden;
    }
    .bg-hik::after {
        content: "";
        position: absolute;
        z-index: -1;
        bottom: -1px;
        right: 0px;
        width: 33%;
        height: 33%;
        background-image: url(https://hik-cargo.com/demo/images/6206720.jpg);
        background-repeat: no-repeat;
        background-size: contain;
        animation: zoomInOut 5s infinite alternate cubic-bezier(0.1, 0, 0.1, 0.1);
    }
    @keyframes zoomInOut {
        0% {
            transform: scale(1); /* Ukuran normal */
        }
        50% {
            transform: scale(1.2); /* Perbesaran */
        }
        100% {
            transform: scale(1); /* Kembali ke ukuran normal */
        }
    }
</style>
<div class="col-12 bg-hik py-3 pt-5 " style="padding-top: 50px !important;padding-bottom: 85px !important;">
    <div class="container pt-5">
        <div class="row">
        
            <div class="col-md-6 col-sm-12 col-12">
                <h2 class="fw-bold text-center" style="color:#0242A3">Nilai Kami</h2>
                <div class="row d-flex justify-content-center">
                    <div class="card-value">
                        <span class="sub-cardtitle">Integritas</span>
                        <p class="sub-cardparagraf">Kami berkomitmen untuk bertindak dengan jujur, adil, dan bertanggung jawab dalam setiap interaksi bisnis.</p>
                    </div>
                    <div class="card-value">
                        <span class="sub-cardtitle">Inovasi</span>
                        <p class="sub-cardparagraf">Kami terus mencari cara baru untuk meningkatkan layanan kami melalui pengembangan teknologi dan proses yang inovatif.</p>
                    </div>
                    <div class="card-value">
                        <span class="sub-cardtitle">Kualitas</span>
                        <p class="sub-cardparagraf">Kami menempatkan standar tinggi dalam segala hal yang kami lakukan, mulai dari pengelolaan operasional hingga pelayanan pelanggan.</p>
                    </div>
                    <div class="card-value">
                        <span class="sub-cardtitle">Kemitraan</span>
                        <p class="sub-cardparagraf">Kami percaya bahwa kemitraan yang kuat dengan pelanggan, mitra, dan komunitas adalah kunci kesuksesan jangka panjang kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 ">
                <span class="sub-title">Keberlanjutan</span>
                    <p class="py-3 sub-paragraf">Kami sadar akan kewajiban kami terhadap komunitas lokal dan lingkungan tempat kami beroperasi. Kami berdedikasi untuk memperbaiki lingkungan dan komunitas kami melalui kegiatan sosial dan praktik berkelanjutan.</p>
                <span class="sub-title">Karier</span>
                    <p class="pt-3 sub-paragraf">Kami terus mencari orang-orang yang berbakat, bersemangat, dan berdedikasi untuk bergabung dengan tim kami. Untuk informasi tambahan, silahkan kunjungi halaman karir kami jika Anda tertarik untuk bergabung dengan Life Core Work.</p>
                <span class="sub-title">Hubungi Kami</span>
                    <p class="pt-3 sub-paragraf">Kami sangat antusias untuk berkolaborasi dengan Anda dan menjawab semua pertanyaan yang Anda miliki tentang layanan kami. Silakan hubungi kami melalui telepon, email, atau kunjungi kantor kami di [Alamat Kantor Pusat].</p>
                
            </div>
        </div>
    </div>
</div>
    
    <style>
    .counter {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        padding: 10px;
    }
    </style>
    <div class="col-12 py-3 pt-5 text-white" style="background:#0242A3;">
        <div class="container pt-5 pb-3">
            <div class="row d-flex align-items-center justify-content-center mb-3 text-center">
                <div class="col-md-10 col-sm-12">
                    <h1 class="fw-bold" style="font-size:2.8rem;">Jaminan Barang Sampai dengan Harga Terbaik. Mana mungkin?</h1>
                    <p class="py-3">Dengan bangga HIK Cargo sudah mengirimkan paket kamu lebih dari 2 juta transaksi, dengan
                    total berat 55 juta kilogram. Kami akan membantu setiap pengiriman kamu sampai di
                    rumah, Apapun tujuanmu.</p>
                    
                    <div class="col-12">
                        <div class="row d-flex d-flex align-items-stretch py-3">
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card  h-100 m-1 py-4" style="background:var(--mint);color:#fff">
                                    <div class="card-body p-2">
                                        <!-- <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a> -->
                                        
                                        <div class="counter" data-target="2814786">0</div>
                                        <h1 class="fs-5">Total Transaksi</h1>
                                        <p>Total Transaksi, Sejak awal bergabung dari transaksi darat, laut, udara</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card  h-100 m-1 py-4" style="background:var(--mint);color:#fff">
                                    <div class="card-body p-2">
                                        <!-- <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a> -->
                                        
                                        <div class="counter" data-target="2456893">0</div>
                                        <h1 class="fs-5">Total Berat Kg</h1>
                                        <p>Melalui udara dengan kargo terbaik; Singapore Airlines & Garuda Indonesia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-12">
                                <div class="card  h-100 m-1 py-4" style="background:var(--mint);color:#fff">
                                    <div class="card-body p-2">
                                        <!-- <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a> -->
                                        
                                        <div class="counter" data-target="50248283">0</div>
                                        <h1 class="fs-5">Total Berat Kg</h1>
                                        <p>Melalui laut dengan Kargo yang beroperasi sendiri.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <a href="#" class="btn secondary-bg py-3 mt-4 rounded-5 fw-bold" style="font-size:1rem"> Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>

    <style>
      .swiper {
        width: 100%;
      }
    </style>

<div class="col-12 py-3 pt-5">
    <div class="container py-5">
        <div class="row d-flex align-items-stretch justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h2 class="pb-2 secondary-color fw-bold">Layanan Kami</h2>
                    <a href="#" class="btn secondary-link my-2 rounded-5">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div><div class="col-md-3 col-sm-12">
                <div class="card h-100">
                  <div class="card-body">
                    <p><span class="card-title fw-bold">Pengiriman Domestik:</span> Kami menawarkan jaringan distribusi yang luas dan andal untuk layanan pengiriman barang domestik kami. Kami menjamin pengiriman kiriman Anda tepat waktu, berapapun ukurannya.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card h-100">
                  <div class="card-body">
                    <p><span class="card-title fw-bold">Pengiriman Internasional:</span> Kami menawarkan layanan pengiriman internasional yang cepat dan aman karena kemitraan internasional kami yang kuat. Mulai dari menyiapkan dokumen yang diperlukan hingga mengantarkan produk ke tujuan, tim kami akan menangani semua kebutuhan pengiriman Anda.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card h-100">
                  <div class="card-body">
                    <p><span class="card-title fw-bold">Distribusi dan Penyimpanan:</span> Sebelum produk Anda dikirim ke tujuan akhir, produk disimpan dengan hati-hati di fasilitas penyimpanan kami yang canggih dan aman. Pemantauan inventaris secara real-time dimungkinkan oleh sistem canggih kami.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card h-100">
                  <div class="card-body">
                    <p><span class="card-title fw-bold">Konsultasi Logistik:</span> Untuk membantu Anda membuat rencana pengiriman yang sukses dan efisien, kami menawarkan layanan konsultasi logistik. Kelompok profesional kami akan menawarkan</p>
                  </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


    <!--section apa kata mereka-->
<div class="col-12 py-3 pt-5">
        <div class="container py-5">
            <div class="row d-flex justify-content-center mb-3 ">
              
                  <div class="col-md-4 col-sm-12">
                    <h1 class="fw-bold" style="font-size: 2.8rem;">Apa Kata Mereka?</h1>
                    <p class="pt-3 ">Dengan banyaknya pendapat dari berbagai tipe customer yang sudah kami layani, dan berikut adalah yang mereka dapatkan dari layanan kami.</p>
                    <style>
                        .rate-button .btn {
                            font-size: 2.1rem; /* Ukuran bintang */
                            padding:0;
                            padding-right: 10px;
                            border: none;
                            background: none;
                            cursor: pointer;
                            transition: color 0.3s; /* Animasi perubahan warna saat hover */
                        }

                        .rate-button .btn:hover {
                            color: #ffc107; /* Warna bintang saat hover */
                        }

                        .rate-button .btn:focus {
                            outline: none; /* Hilangkan focus outline saat bintang dipilih */
                        }

                        .popup-overlay {
                            position: fixed;
                            top: 0;
                            left: 0;
                            z-index: 2;
                            width: 100%;
                            height: 100%;
                            background-color: rgba(0, 0, 0, 0.2); /* Transparansi latar belakang */
                            display: none;
                            justify-content: center;
                            align-items: center;
                            /* Tambahkan efek blur pada latar belakang popup */
                            backdrop-filter: blur(8px);
                            -webkit-backdrop-filter: blur(8px); /* Untuk dukungan browser Safari */
                        }

                        .popup-content {
                            background-color: white;
                            padding: 20px;
                            border-radius: 5px;
                            width:100%;
                            max-width:400px;
                          }
                    </style>
                    <div class="col-md-12">
                          <div class="rate-button">
                              <!-- Bintang 1 -->
                              <button type="button" class="btn" onmouseover="rate(1)" onclick="rates(1)" onmouseout="resetStars()"><i class="fa fa-star"></i></button>
                              <!-- Bintang 2 -->
                              <button type="button" class="btn" onmouseover="rate(2)" onclick="rates(2)" onmouseout="resetStars()"><i class="fa fa-star"></i></button>
                              <!-- Bintang 3 -->
                              <button type="button" class="btn" onmouseover="rate(3)" onclick="rates(3)" onmouseout="resetStars()"><i class="fa fa-star"></i></button>
                              <!-- Bintang 4 -->
                              <button type="button" class="btn" onmouseover="rate(4)" onclick="rates(4)" onmouseout="resetStars()"><i class="fa fa-star"></i></button>
                              <!-- Bintang 5 -->
                              <button type="button" class="btn" onmouseover="rate(5)" onclick="rates(5)" onmouseout="resetStars()"><i class="fa fa-star"></i></button>
                          </div>
                          <div class="btn secondary-bg mt-3 rounded-5">
                              Beri kami penilaian
                          </div>
                          <!-- Popup -->
                            <div class="popup-overlay" id="popupOverlay">
                                <div class="popup-content">
                                    <!-- Tombol close -->
                                    <button id="closeButton" class="close-button btn btn-link float-end"><i class="fa-solid fa-close"></i></button>
                                    <h2>Rate Us <span id="ratingDisplay" style="margin-left: 10px;"></span></h2>
                                    <form id="myForm" method="POST">
                                        <!-- Form elements here -->
                                        <div class="mb-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="fullNameInput" placeholder="fullName">
                                                <label for="fullNameInput">Full Name</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                                                <label for="emailInput">Email</label>
                                            </div>
                                        </div>
                                        <!-- Input tersembunyi untuk nilai rating -->
                                        <input type="hidden" id="ratingInput" name="rating">
                                        <button type="submit" name="rate-us" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                    </div>
                    
                    
                    <script>
                        function rate(rating) {
                            // Atur warna bintang yang dipilih dan bintang sebelumnya menjadi kuning
                            for (let i = 0; i < rating; i++) {
                                document.querySelectorAll('.rate-button .btn i')[i].style.color = '#ffc107'; // Warna kuning
                            }
                        }
                        
                        function rates(rating) {
                            // Atur warna bintang yang dipilih dan bintang sebelumnya menjadi kuning
                            for (let i = 0; i < rating; i++) {
                                document.querySelectorAll('.rate-button .btn i')[i].style.color = '#ffc107'; // Warna kuning
                            }
                            // Set nilai rating pada input tersembunyi
                            document.getElementById('ratingInput').value = rating;
                            // Tampilkan jumlah bintang yang dipilih di samping judul popup
                            document.getElementById('ratingDisplay').innerHTML = '';
                            for (let i = 0; i < rating; i++) {
                                document.getElementById('ratingDisplay').innerHTML += '<i class="fa fa-star" style="color:#ffc107"></i>';
                            }
                            // Tampilkan popup
                            document.getElementById('popupOverlay').style.display = 'flex';
                        }
                    
                        function resetStars() {
                            // Atur warna semua bintang menjadi warna default
                            document.querySelectorAll('.rate-button .btn i').forEach(function (star) {
                                star.style.color = 'black'; // Warna default
                            });
                        }
                    
                        // Tambahkan event listener pada tombol close untuk menutup popup
                        document.getElementById('closeButton').addEventListener('click', function() {
                            document.getElementById('popupOverlay').style.display = 'none'; // Sembunyikan popup
                            resetStars(); // Reset warna bintang
                        });
                    </script>


                        <?php
                        if (isset($_POST['rate-us'])) {
                            // Process form data
                            $rating = $_POST['rating'];
                            $name = $_POST['name'];
                            $email = $_POST['email'];

                            // Here you can insert the data into your database
                            // Example:
                            /*
                            $servername = "localhost";
                            $username = "username";
                            $password = "password";
                            $dbname = "database";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "INSERT INTO ratings (rating, name, email)
                            VALUES ('$rating', '$name', '$email')";

                            if ($conn->query($sql) === TRUE) {
                                echo "<script>alert('Thank you for your rating!');</script>";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();
                            */

                            echo $rating;
                            echo $name;
                            echo $email;
                            // echo "<script>alert('Thank you for your rating!');</script>";
                        }
                        ?>
                    <!-- <form>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="floatingInput" placeholder="Your Name">
                          <label for="floatingInput">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="floatingInput" placeholder="Your Name">
                          <label for="floatingInput">Company</label>
                        </div>
                        <div class="form-floating">
                          <textarea class="form-control" row="3" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                          <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="col-12 mt-3">
                          <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </form> -->
                </div>
                <div class="col-md-8 col-sm-12 py-5">
                  <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper d-flex justify-content-stretch">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="col-12 p-5">
                                    <div class="card p-3 bg-transparent shadow text-dark w-100 border-0">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                              Reysen Luis
                                              <?php
                                                
                                                $i = 0;
                                                $rand=rand(1,5);
                                                for ($i=0; $i < $rand; $i++) { 
                                                  echo '<i class="fa fa-star" style="color:#ffc107"></i>';
                                                }
                                              ?>
                                            </h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><small>PT ABC Sukses Bersama, Jakarta</small></h6>
                                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab totam minima asperiores non debitis natus vitae inventore enim eum culpa. Culpa provident fugiat rerum qui autem ducimus ipsum at odio?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="col-12 p-5">
                                    <div class="card p-3 bg-transparent shadow text-dark w-100 border-0">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                              John Doe
                                              <?php
                                                
                                                $i = 0;
                                                $rand=rand(1,5);
                                                for ($i=0; $i < $rand; $i++) { 
                                                  echo '<i class="fa fa-star" style="color:#ffc107"></i>';
                                                }
                                              ?>
                                            </h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><small>PT Papilu Indi Jaya, Jakarta</small></h6>
                                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab totam minima asperiores non debitis natus vitae inventore enim eum culpa. Culpa provident fugiat rerum qui autem ducimus ipsum at odio?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- END SLIDES -->
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>


    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      });
    </script>
    <style>
    .pengirim::before {
      content: attr(data-card);
      font-weight: bold;
      font-size: 1.5rem;
      /* Tambahkan transisi untuk efek hover */
      transition: color 0.3s ease;
      border-bottom:4px dotted transparent;
    }

    .pengirim:hover::before {
      color: var(--mint);
      border-bottom:4px dotted var(--mint);
    }

    </style>
    <div class="col-12">
        <div class="container px-4 py-5" id="featured-3">
          <h2 class="pb-2 secondary-color fw-bold">Proses Pengiriman</h2>
          <p>Proses pengiriman barang dari luar negeri menjadi lebih mudah dan nyaman dengan layanan kami.
Mulai dari proses pembayaran yang aman dan proses pengiriman yang cepat dengan sistem yang telah teruji menjadi andalan para pedagang. Produk kamu disimpan dan di proses dengan baik di gudang pribadi eksklusif kami</p>
          <div class="col-12">
            <div class="row">

              <div class="col-md-3 col-sm-6 col-6 pengirim" data-card='01'>
                  <div class="feature col text-center p-0">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary fs-2 mb-3 bg-transparent">
                      <img src="./images/pengirim-1.png" style="width:150px; height:auto">
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Gudang Luar Negeri</h3>
                    <p>Gratis Alamat Gudang HIK Cargo untuk semua! Kirim Barang Sepuasnya 24/7</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 pengirim" data-card='02'>
                  <div class="feature col text-center p-0">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary fs-2 mb-3 bg-transparent">
                      <img src="./images/pengirim-2.png" style="width:150px; height:auto">
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Pengiriman</h3>
                    <p>Pengiriman Tak Terbatas dapat menggunakan Via Laut/Udara, Sesuai Kebutuhan</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 pengirim" data-card='03'>
                  <div class="feature col text-center p-0">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary fs-2 mb-3 bg-transparent">
                      <img src="./images/pengirim-3.png" style="width:150px; height:auto">
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Bea Cukai</h3>
                    <p>Kami Sudah Mengurus Bea Cukai karena sudah termasuk ke dalam Biaya Kirim Paketnya</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 pengirim" data-card='04'>
                  <div class="feature col text-center p-0">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary fs-2 mb-3 bg-transparent">
                      <img src="./images/pengirim-4.png" style="width:150px; height:auto">
                    </div>
                    <h3 class="fs-5 text-body-emphasis">Rumah Kamu</h3>
                    <p>Pengiriman datang dari jakarta kemudian menuju Rumah kamu dengan jasa kurir Profesional</p>
                  </div>
              </div>

              <div class="col-md-12 text-center mt-3">
                  <a href="#" class="btn secondary-bg my-5 rounded-5 fs-5">Kirim Sekarang</a>
                  <p>HIK Cargo telah dipercaya oleh para Pedagang Grosir dan Toko Online di seluruh Indonesia. Kami membantu para pedagang untuk mengirimkan barang dari China dan Thailand. Sistem Logistik yang kami kembangkan telah teruji dapat membantu para pedagang untuk memasukan barang ke Indonesia. Pasti aman, Anda terima beres</p>
              </div>


            </div>
          </div>
        </div>
    </div>

    <style>
    .list-group-items{
      background:transparent;
      list-style:none;
      padding-bottom:3px;
    }
    </style>