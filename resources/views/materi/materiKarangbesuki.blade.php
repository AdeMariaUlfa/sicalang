@extends('layouts.template')
@section('content')
<style>
    .img-container {
        text-align: center;
        display: block;
        width: 500px;
    }

    body {
        background-image: url("{{ asset('bg/karangbesuki-opacity.png') }}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item" style="background-color: white;">
                <div class="row">
                    <div class="right-content">
                        <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Karangbesuki</b></h3><br><br>
                        <div id="page1">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 1. Panorama 360 Candi Karangbesuki.jpg') }}" alt="">
                                    <p><b>Foto 1. Panorama 360 Candi Karangbesuki</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Karangbesuki merupakan salah satu candi peninggalan Kerajaan Kanjuruhan yang diperkirakan dibangun pada masa pemerintahan Raja Gajayana abad ke 8 M. Bangunan Candi Karangbesuki berlanggam Jawa Tengah. Candi ini terbuat dari batu andesit dengan luas 16 m x 36 m. N.J. Krom pernah membahas mengenai Candi Karangbesuki yang kemudian menyebutnya dengan nama Candi Besuki (Sedyawati, 2013). Lokasi Candi Karangbesuki atau juga disebut dengan Candi Gasek ini berdekatan dengan lokasi berdirinya Candi Badut kurang lebih sekitar 500 meter ke arah utara, tepatnya di Desa Karangbesuki, Kec. Sukun, Kota Malang, Jawa Timur.</p>
                            <p style="text-align: justify; text-indent: 0.5in;">Nama Gasek sendiri beberapa kali disebutkan dalam Prasasti Ukir Pamotoh tahun 1120 Saka atau tahun 1198 M. Candi Karangbesuki menghadap ke arah barat dan berbentuk bujur sangakar dengan ukuran 6,8 m x 6,8 m, yang setiap sisinya tidak memiliki penampil. Di lokasi Candi Karangbesuki ditemukan arca Resi Agastya yang saat ini disimpan di Museum Mpu Purwa dan arca Ganesha yang sudah di pindah ke situs Watu Gong.</p>
                        </div>
                        <div id="page2">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 2. Sisa Bangunan Candi Karangbesuki.jpg') }}" alt="">
                                    <p><b>Foto 2. Sisa Bangunan Candi Karangbesuki</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;"> Candi Karangbesuki juga disebut sebagai Candi Wurung atau candi yang gagal dalam proses pembangunannya. Struktur dari Candi Karangbesuki juga sudah hancur hanya tersisa pondasinya saja (Lihat Foto 2). Candi Karangbesuki merupakan Candi berlatar belakang agama Hindu Syiwa. Hal tersebut diperkuat dengan penemuan dua arca dengan gaya pengarcaan Parvati yang ditemukan pada bagian tengah Candi Karangbesuki (Sedyawati dkk, 2013). Sama halnya dengan Candi Badut, Candi Karangbesuki ini didirikan sebagai tempat untuk memuliakan Resi Agastya yang berguna sebagai tempat menghilangkan penyakit dan malapetaka. Hingga saat ini Candi Karangbesuki digunakan sebagai tempat pemujaan bagi pemeluk agama Hindu Syiwa.</p><br><br>
                        </div>
                        <div id="page3">
                            <p><b>Daftar Pustaka</b><br>
                                Sedyawati Edi, Hariani Santiko, Hasan, Ratnacah, Wiwin Djuwita, Ramelan, A. (2013). Candi Indonesia Seri Jawa. Direktorat Pelestarian Cagar Budaya dan Permuseuman, Direktorat Jendral Kebudayaan, Kementrian Pendidikan dan Kebudayaan: Jakarta.
                            </p>
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