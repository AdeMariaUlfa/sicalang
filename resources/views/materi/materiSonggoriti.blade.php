@extends('layouts.template')
@section('content')
<style>
    .img-container {
        text-align: center;
        display: block;
        width: 500px;
    }

    body {
        background-image: url("{{ asset('images/patern3.gif') }}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row">

                    <div class="right-content">
                        <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Songgoriti</b></h3><br><br>
                        <div class="d-flex justify-content-center">
                            <span class="img-container "> <!-- Inline parent element -->
                                <img src="{{ asset('images/Foto 1. Panorama 360 Candi Songgoriti.jpg') }}" alt="">
                                <p><b>Foto 1. Panorama 360 Candi Songgoriti</b></p>
                                <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                            </span>
                        </div>
                        <p style="text-align: justify; text-indent: 0.5in;">Candi Songgoriti merupakan salah satu situs candi yang bangunannya bernafaskan Hindu beraliran Siwa (Soeroto, 2010). Candi ini berlokasi di Dusun Songgoriti, Desa Songgokerto, Kecamatan Batu, Kota Batu yang terletak diantara lembah Gunung Kawi dan Gunung Arjuno. Dibangunnya Candi Songgoriti ini bertujuan sebagai bangunan suci dan juga sebagai petirtaan bagi para pandai logam yang bergaya arsitektur samudramanthana. Sehingga Candi Songgoriti ini memang sengaja dibangun di atas sumber mata air panas. Menurut ajaran agama Hindu tempat yang mengeluarkan air panas merupakan tempat terbaik untuk mendirikan suatu bangunan suci (Soeroto, 2010). Candi Songgoriti berfungsi sebagai tempat pemujaan bagi pemeluk agama Hindu Syiwa dan juga sebagai tempat wisata sejarah.</p>
                        <p style="text-align: justify; text-indent: 0.5in;">Candi Songgoriti juga dikenal sebagai Candi Supo, karena candi ini dibangun oleh Mpu Supo atas petunjuk dari Mpu Sindok. Mpu Sindok adalah raja pertama dari Kerajaan Medang yang memerintah sekitar tahun 929 M hingga 947 M. Berdasarkan prasasti Sangguran yang berlokasi tidak jauh dari lokasi Candi Songgoriti, Candi ini dibangun sekitar abad ke-10 M (Soeroto, 2010) yaitu, pada masa perpindahan pemerintahan Mpu Sindok dari Jawa Tengah ke Jawa Timur.</p>
                        <p style="text-align: justify; text-indent: 0.5in;">Perpindahan pusat pemerintahan kerajaan ini disebabkan oleh letusan dahsyat dari gunung berapi sehingga menghancurkan wilayah Kerajaan Mataram, terjadinya krisis politik yang menyebabkan runtuhnya Kerajaan Mataram Kuno, dan berdasarkan pertimbangan dalam bidang ekonomi (Widiah, 2018). Adapun wilayah kekuasaan di Jawa Timur yaitu Nganjuk, Pasuruan, Surabaya, dan Malang. Kerajaan Medang merupakan bagian dari Kerajaan Mataram Kuno di Jawa Tengah, yang kemudian kekuasaanya dipegang oleh Mpu Sindok di Jawa Timur sekaligus sebagai cikal bakal berdirinya kerajaan baru dengan wangsa dan sistem pemerintahan yang baru.</p>
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
                        <p style="text-align: justify; text-indent: 0.5in;">Candi Songgoriti pertama kali ditemukan oleh Van I Ijsseldijk seorang arkeolog dari Belanda pada tahun 1799 M. Candi Songgoriti memiliki tinggi 2,44 meter dan berukuran 14,36 meter. Candi Songgoriti berlanggam arsitektur Jawa Tengah. Hal tersebut dapat dilihat dari bangunan Candi yang berbentuk tambun (Lihat Foto 2) dan pada bagian sisi luar dinding candi terdapat pengapit relung berhiaskan dewa dewi seperti langgam hias bangunan candi Jawa Tengah (Lihat Foto 3). Pada tubuh Candi Songgoriti terdapat relung atau cekungan sebagai tempat berdirinya arca (Lihat Foto 3). Ekskavasi serta pemugaran Candi Songgoriti dilakukan pada tahun 1938 M (Soeroto, 2010).<br><br>
                            <b>Daftar Pustaka</b><br>
                            Soeroto, Myrtha. (2010). Album Arsitektur Candi Cagar Budaya Klasik Hindu Buddha; Cetakan Kedua. Yayasan Keluarga Batam Myrtle Publishing: Batam.<br>
                            Widiah, S. (2018). Studi historis Prasasti Cunggrang sebagai sumber sejarah pada masa Mpu Sindok tahun 929-947 M. Avatara, 6(1), 221–237. https://jurnalmahasiswa.unesa.ac.id/index.php/avatara/article/view/22843.
                        </p>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

@endsection