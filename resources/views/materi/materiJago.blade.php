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
        background-image: url("{{ asset('bg/jago-opacity2.png') }}"); 
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
                        <h3 style="color:black;" class="d-flex justify-content-center"><b>Candi Jago</b></h3><br><br>
                        <div id="page1">
                            <div class="d-flex justify-content-center">
                                <span class="img-container "> <!-- Inline parent element -->
                                    <img src="{{ asset('images/Foto 1. Panorama 360 Candi Jago.png') }}" alt="">
                                    <p><b>Foto 1. Panorama 360 Candi Jago</b></p>
                                    <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                                </span>
                            </div>
                            <p style="text-align: justify; text-indent: 0.5in;">Candi Jago berlokasi di Dusun Jago, Desa Tumpang, Kecamatan Tumpang, Kabupaten Malang. Menurut Kitab Pararaton dan Negarakertagama nama dari Candi Jago yang sebenarnya adalah Candi Jajaghu. <i>Jajaghu</i> berarti "Keagungan" yang digunakan untuk menyebutkan suatu tempat suci (Soekmono, 1973).</p>
                        </div>
                        <div id="page2">
                        <div class="d-flex justify-content-center">
                            <span class="img-container "> <!-- Inline parent element -->
                                <img src="{{ asset('images/Foto 2. Arca Amogaphasa.jpg') }}" alt="">
                                <p><b>Foto 2. Arca Amogaphasa</b></p>
                                <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                            </span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <span class="img-container "> <!-- Inline parent element -->
                                <img src="{{ asset('images/Foto 3. Arca Batara Kala.jpg') }}" alt="">
                                <p><b>Foto 3. Arca Batara Kala</b></p>
                                <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                            </span>
                        </div>
                        <p style="text-align: justify; text-indent: 0.5in;">Candi Jago beraliran Siwa Buddha Tantrayana yang dibuktikan dengan adanya Arca Amoghapasha <i>(Lihat Foto 2)</i> yang merupakan dewa tertinggi dari ajaran Buddha Tantrayana. Arca tersebut juga sebagai perwujudan dari Wisnuwardana yang wafat pada tahun 1268 M (Soekmono, 1973). Di dalam Kitab Negarakertagama pada pupuh 41 gatra ke 4 menjelaskan bahwa Raja Wisnuwardhana sebagai Raja Singhasari menganut agama Siwa Buddha Tantrayana, yang merupakan perpaduan aliran keagamaan antara ajaran agama Hindu dan Buddha (Sedyawati, 2013). Aliran ini berkembang selama masa pemerintahan Kerajaan Singhasari. Selain Arca Amogapasha juga terdapat Arca Batara Kala di depan bangunan Candi Jago tepatnya berada di sebelah utara bangunan candi <i>(Foto 3)</i>.</p>
                        <p style="text-align: justify; text-indent: 0.5in;">Pembangunan Candi Jago berlangsung sekitar tahun 1268 M hingga tahun 1280 M, sebagai bentuk penghormatan atau pendharmaan terhadap Sri Jaya Wisnuwardhana (Istari, 2015), yaitu Raja Singhasari yang keempat. Menurut Kitab Pararaton dan Kitab Negarakertagama meskipun Candi Jago ini dibangun oleh Kerajaan Singhasari, selama tahun 1359 M Raja Hayamwuruk dari Kerajaan Majapahit sering mengunjungi Candi Jago. Keterkaitan antara Candi Jago dengan Kerajaan Singhasari bisa dilihat dengan adanya pahatan padma atau teratai yang menjulur ke atas dari pangkalnya. Diduga Candi Jago ini sudah mengalami pemugaran atas perintah dari Raja Adityawarman dari Melayu pada tahun 1342 M. Raja Adityawarman masih memiliki hubungan darah dengan Raja dari Kerajaan Majapahit yaitu Raja Hayamwuruk. Pemugaran tersebut diperkuat dengan adanya arca Bhairawa yang tidak terkait dengan arca-arca lain (Soeroto, 2009). Candi Jago belum pernah dipugar baik oleh Belanda maupun pemerintah daerah (Soeroto, 2009).</p>
                        </div>
                        <div id="page3">
                        <div class="d-flex justify-content-center">
                            <span class="img-container "> <!-- Inline parent element -->
                                <img src="{{ asset('images/Foto 4. Bentuk Bangunan Candi Jago.jpg') }}" alt="">
                                <p><b>Foto 4. Bentuk Bangunan Candi Jago</b></p>
                                <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                            </span>
                        </div>
                        <div class="d-flex justify-content-center">
                            <span class="img-container "> <!-- Inline parent element -->
                                <img src="{{ asset('images/Foto 5. Relief Candi Jago.jpg') }}" alt="">
                                <p><b>Foto 5. Relief Candi Jago</b></p>
                                <p>(Sumber: Dokumentasi Pribadi, 2022)</p>
                            </span>
                        </div>
                        <p style="text-align: justify; text-indent: 0.5in;">Candi Jago menghadap ke arah barat dengan bangunan yang berbentuk segi empat yang memiliki luas 23 meter x 14 meter <i>(Lihat Foto 4).</i> Tinggi dari Candi ini tidak diketahui dengan pasti karena atap dari Candi Jago sudah hilang namun diperkirakan tinggi bangunan Candi Jago sekitar 15 meter. Bangunan Candi Jago berlanggam arsitektur Jawa Timur. Bangunan dari Candi Jago dipenuhi dengan relief yang dipahat dengan rapi mulai dari kaki candi hingga bagian atas candi <i>(Lihat Foto 5).</i> Relief dari Candi Jago berisi cerita yang mengandung unsur pelepasan dan kepergian. Hal tersebut menguatkan dugaan bahwa pembangunan dari Candi Jago berhubungan erat dengan wafatnya Wisnuwardana (Soeroto, 2009). Hingga saat ini Candi Jago di gunakan sebagai tempat pemujaan terhadap roh leluhur.</p><br><br>
                        </div>
                        <div id="page4">    
                        <p><b>Daftar Pustaka</b>
                            <br>1. Perpustakaan Nasional Republik Indonesia. 2014. Candi Jago. (Online), <i>(https://candi.perpusnas.go.id/temples/deskripsi-jawa_timur-candi_jago)</i> diakses pada tanggal 
                            <br>&ensp;&ensp;12 Oktober 2022.<br>
                            2. Sedyawati Edi, Hariani Santiko, Hasan, Ratnacah, Wiwin Djuwita, Ramelan, A. (2013). Candi Indonesia Seri Jawa. <br>&ensp;&ensp;Direktorat Pelestarian Cagar Budaya dan Permuseuman, Direktorat Jenderal Kebudayaan, Kementerian Pendidikan dan Kebudayaan: Jakarta.<br>
                            3. Soekmono, R. (1973). Pengantar Sejarah Kebudayaan Indonesia 2. Yayasan Kanisius: Yogyakarta.<br>
                            4. Soeroto, Myrtha. (2009). Album Arsitektur Candi Cagar Budaya Klasik Hindu Buddha; Cetakan Pertama. Yayasan Keluarga Batam Myrtle Publishing: Batam.
                        </p>
                        </div>
                        <div class="pagination d-flex justify-content-center">
                            <a onclick="page(1)" href="#">1</a>
                            <a onclick="page(2)" href="#">2</a>
                            <a onclick="page(3)" href="#">3</a>
                            <a onclick="page(4)" href="#">4</a>
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
        var x4 = document.getElementById("page4");
        x2.style.display = "none";
        x3.style.display = "none";
        x4.style.display = "none";
    }

    function page(pg) {
        var x = document.getElementById("page1");
        var x2 = document.getElementById("page2");
        var x3 = document.getElementById("page3");
        var x4 = document.getElementById("page4");
        if (pg === 1) {
            x.style.display = "block";
            x2.style.display = "none";
            x3.style.display = "none";
            x4.style.display = "none";
        } else if (pg === 2) {
            x.style.display = "none";
            x2.style.display = "block";
            x3.style.display = "none";
            x4.style.display = "none";
        } else if (pg === 3) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "block";
            x4.style.display = "none";
        } else if (pg === 4) {
            x.style.display = "none";
            x2.style.display = "none";
            x3.style.display = "none";
            x4.style.display = "block";
        }
    }
</script>
@endsection