@extends('layouts.template')
@section('content')
<style>
    .img-container {
        text-align: center;
        display: block;
        width: 500px;
        padding: 20px;
    }

    .bg-card {
        background-image: url("{{ asset('bg/songgoriti-opacity2.png') }}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font-family: 'Comic Sans MS', 'Comic Sans';
    }
</style>
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item bg-card">
                <div class="row">

                    <div class="right-content">
                        <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Songgoriti</b></h3><br><br>
                        <div id="page1">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 1. Panorama 360 Candi Songgoriti.jpg') }}" alt="">
                                    <p><b>Foto 1. Panorama 360 Candi Songgoriti</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Songgoriti merupakan salah satu situs candi yang bangunannya bernafaskan Hindu beraliran Siwa (Soeroto, 2010). Candi ini berlokasi di Dusun Songgoriti, Desa Songgokerto, Kecamatan Batu, Kota Batu yang terletak diantara lembah Gunung Kawi dan Gunung Arjuno. Dibangunnya Candi Songgoriti ini bertujuan sebagai bangunan suci dan juga sebagai petirtaan bagi para pandai logam yang bergaya arsitektur <i>Samudramanthana</i>. Sehingga Candi Songgoriti ini memang sengaja dibangun di atas sumber mata air panas. Menurut ajaran agama Hindu tempat yang mengeluarkan air panas merupakan tempat terbaik untuk mendirikan suatu bangunan suci (Soeroto, 2010). Candi Songgoriti berfungsi sebagai tempat pemujaan bagi pemeluk agama Hindu Siwa dan juga sebagai tempat wisata sejarah.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Songgoriti juga dikenal sebagai Candi Supo, karena candi ini dibangun oleh Mpu Supo atas petunjuk dari Mpu Sindok. Mpu Sindok adalah raja pertama dari Kerajaan Medang yang memerintah sekitar tahun 929 M hingga 947 M. Berdasarkan Prasasti Sangguran yang berlokasi tidak jauh dari lokasi Candi Songgoriti, candi ini dibangun sekitar abad ke-10 M (Soeroto, 2010) yaitu, pada masa perpindahan pemerintahan Mpu Sindok dari Jawa Tengah ke Jawa Timur.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Perpindahan pusat pemerintahan kerajaan ini disebabkan oleh letusan dahsyat dari gunung berapi sehingga menghancurkan wilayah Kerajaan Mataram, terjadinya krisis politik yang menyebabkan runtuhnya Kerajaan Mataram Kuno, dan berdasarkan pertimbangan dalam bidang ekonomi (Widiah, 2018). Adapun wilayah kekuasaan di Jawa Timur yaitu Nganjuk, Pasuruan, Surabaya, dan Malang. Kerajaan Medang merupakan bagian dari Kerajaan Mataram Kuno di Jawa Tengah, yang kemudian kekuasaanya dipegang oleh Mpu Sindok di Jawa Timur sekaligus sebagai cikal bakal berdirinya kerajaan baru dengan wangsa dan sistem pemerintahan yang baru.</p>
                        </div>
                        <div id="page2">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 2. Bentuk Bangunan Candi Songgoriti.jpg') }}" alt="">
                                    <p><b>Foto 2. Bentuk Bangunan Candi Songgoriti</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 3. Relung pada Bangunan Candi Songgoriti.jpg') }}" alt="">
                                    <p><b>Foto 3. Relung pada Bangunan Candi Songgoriti</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Songgoriti pertama kali ditemukan oleh Van I Ijsseldijk seorang arkeolog dari Belanda pada tahun 1799 M. Candi Songgoriti memiliki tinggi 2,44 meter dan berukuran 14,36 meter. Candi Songgoriti berlanggam arsitektur Jawa Tengah. Hal tersebut dapat dilihat dari bangunan candi yang berbentuk tambun <i>(Lihat Foto 2)</i> dan pada bagian sisi luar dinding candi terdapat pengapit relung berhiaskan dewa dewi seperti langgam hias bangunan candi Jawa Tengah <i>(Lihat Foto 3).</i> Pada tubuh Candi Songgoriti terdapat relung atau cekungan sebagai tempat berdirinya arca <i>(Lihat Foto 3).</i> Ekskavasi serta pemugaran Candi Songgoriti dilakukan pada tahun 1938 M (Soeroto, 2010).</p><br><br>
                        </div>
                        <div id="page3">
                            <p><b>Daftar Pustaka</b><br>
                            1. Soeroto, Myrtha. (2010). Album Arsitektur Candi Cagar Budaya Klasik Hindu Buddha; Cetakan Kedua. Yayasan Keluarga Batam Myrtle Publishing: Batam.<br>
                            2. Widiah, S. (2018). Studi historis Prasasti Cunggrang sebagai sumber sejarah pada masa Mpu Sindok tahun 929-947 M. Avatara, 6(1), 221–237. 
                            </p>
                            <p>&ensp;&ensp;<i>https://jurnalmahasiswa.unesa.ac.id/index.php/avatara/article/view/22843.</i></p>
                        </div>
                        <div class="pagination d-flex justify-content-center">
                            <a onclick="page(1)" href="#">1</a>
                            <a onclick="page(2)" href="#">2</a>
                            <a onclick="page(3)" href="#">3</a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
<script>
    window.onload = function() {
        var x2 = document.getElementById("page2");
        var x3 = document.getElementById("page3");
        x2.style.display = "none";
        x3.style.display = "none";
    }

    function page(pg) {
        var x = document.getElementById("page1");
        var x2 = document.getElementById("page2");
        var x3 = document.getElementById("page3");
        if (pg === 1) {
            x.style.display = "block";
            x2.style.display = "none";
            x3.style.display = "none";
        } else if (pg === 2) {
            x.style.display = "none";
            x2.style.display = "block";
            x3.style.display = "none";
        } else if (pg === 3) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "block";
        }
    }
</script>
@endsection